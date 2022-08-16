<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdmingamenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $iamuser = Auth::user();

        $role = $iamuser->role;

        if($iamuser->role === "admin"){
            return view('admingamen');
        }else{
            return view('top',['user_kengen'=> $role]);
        }

    }
}
