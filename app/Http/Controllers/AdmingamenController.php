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

        if($iamuser->role === 9){
            return view('admingamen');
        }else{
            return view('top');
        }

    }
}
