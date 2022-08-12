<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DetailController extends Controller
{
    public function show(User $user_id)
    {
        //dd($user_id);
        return view('detail',['attendant'=> $user_id]);
    }
}
