<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jnaso;
use Auth;


class RecommendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jansos = Janso::orderBy('id', 'asc')->get();
        dd($jansos);

        return view('recommend',['jansos'=>$jansos]);
    }
}
