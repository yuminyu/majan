<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ListattendantController;
//use App\Http\Controllers\RecommendController;
use App\Http\Controllers\AttendantregisterController;
use App\Http\Controllers\DoneController;
use App\Http\Controllers\AdmingamenController;
use App\Http\Controllers\MyprofileController;
use App\Http\Controllers\YameruController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\JansotorokuController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('index');});

Route::get('/top',[TopController::class,'index']);

Route::get('/listattendant',[ListattendantController::class,'index']);

//Route::get('/recommend',[JansotorokuController::class,'index']);

Route::get('/attendantregister',[AttendantregisterController::class,'index']);

Route::get('/done',[DoneController::class,'index']);

Route::post('/done',[DoneController::class,'store']);

Route::get('/admingamen',[AdmingamenController::class,'index']);
Route::post('/jansotoroku',[JansotorokuController::class,'store']);

Route::get('/myprofile',[MyprofileController::class,'index']);

Route::get('/yameru',[YameruController::class,'index']);

Route::get('/detail/{user_id}',[DetailController::class,'show']);

Auth::routes();

