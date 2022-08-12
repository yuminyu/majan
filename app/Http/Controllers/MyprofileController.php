<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MyprofileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $iamuser = Auth::user();

        return view('myprofile',['user_profile'=> $iamuser]);
    }
}
