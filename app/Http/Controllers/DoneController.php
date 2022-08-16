<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Str;

class DoneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        //バリデーション 
         $validator = Validator::make($request->all(), [
             'attend_janso' => ['required', 'string', 'max:255'],
             'attend_houshin' => ['required', 'string', 'max:255'],
             'myimg'=>['required','file','max:2048'],
        ]);

        // //バリデーション:エラー
         if ($validator->fails()) {
             return redirect('/')
                 ->withInput()
                 ->withErrors($validator);
        }
        

        $user = Auth::user();

        $user->attend_janso = $request->attend_janso;
        $user->attend_houshin = $request->attend_houshin;
        $user->role = "attendant";

        //画像を取得、ファイルオブジェクト？として
        $imgfile = $request->file('myimg');
        //dd($imgfile);

        if ( !empty($imgfile) ) {
            // ファイルの拡張子取得
            $ext = $imgfile->guessExtension();
    
            //ファイル名を生成
            $fileName = Str::random(32).'.'.$ext;
            //dd($fileName);

            // 画像のファイル名を任意のDBに保存
            $user->myimg = $fileName;
            $user->save();
    
            //public/uploadフォルダを作成
            $target_path = public_path('/uploads/');
    
            //ファイルをpublic/uploadフォルダに移動
            $imgfile->move($target_path,$fileName);

            return view('done');
    
        }else{
            
            return view('done');
        }
        
    }
}
