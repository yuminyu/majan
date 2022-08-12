<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class YameruController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $iamuser = Auth::user();

        $iamuser->role_flag = 1;

        $iamuser->save();

        return view('yametadone');
    }
}
