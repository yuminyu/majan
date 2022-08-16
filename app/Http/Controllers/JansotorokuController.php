<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Janso;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\Validator;

class JansotorokuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        //バリデーション 
         $validator = Validator::make($request->all(), [
             'jansoName' => ['required', 'string', 'max:255'],
             'jansoTokutyo' => ['required', 'string', 'max:255'],
             'jansoimg'=>['required','file','max:2048'],
        ]);

        // //バリデーション:エラー
         if ($validator->fails()) {
             return redirect('/')
                 ->withInput()
                 ->withErrors($validator);
        }
        
        $janso = new Janso;
        $janso->jansoName = $request->jansoName;
        $janso->jansoTokutyo = $request->jansoTokutyo;
        
        $imgfile = $request->file('jansoimg');

        if ( !empty($imgfile) ) {
            // ファイルの拡張子取得
            $ext = $imgfile->guessExtension();
    
            //ファイル名を生成
            $fileName = Str::random(32).'.'.$ext;
            //dd($fileName);

            // 画像のファイル名を任意のDBに保存
            $janso->jansoimg = $fileName;
            
            $janso->save();
    
            //public/uploadフォルダを作成
            $target_path = public_path('/uploads/');
    
            //ファイルをpublic/uploadフォルダに移動
            $imgfile->move($target_path,$fileName);

            return view('admingamen');
    
        }else{
            
            return view('admingamen');
        }
        
    }

    public function index(){
        $jansos = Janso::orderBy('id', 'asc')->get();
        //dd($jansos);

        return view('recommend',['jansos'=>$jansos]);
    }
}
