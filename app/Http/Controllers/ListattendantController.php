<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ListattendantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $attendants = User::get()->where('role', "attendant");

        return view('listattendant',['attendants'=>$attendants]);
    }
}
