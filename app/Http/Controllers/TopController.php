<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $iamuser = Auth::user();
        $role = $iamuser->role_flag;
        //dd($role);
        return view('top',['user_kengen'=> $role]);
    }
}
