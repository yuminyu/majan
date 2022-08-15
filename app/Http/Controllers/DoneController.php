<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

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

        $user->save();
        
        return view('done');
        
    }
}
