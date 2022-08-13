<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ListattendantController;
use App\Http\Controllers\RecommendController;
use App\Http\Controllers\AttendantregisterController;
use App\Http\Controllers\DoneController;
use App\Http\Controllers\AdmingamenController;
use App\Http\Controllers\MyprofileController;
use App\Http\Controllers\YameruController;
use App\Http\Controllers\DetailController;

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

Route::get('/majan/top',[TopController::class,'index']);

Route::get('/majan/listattendant',[ListattendantController::class,'index']);

Route::get('/majan/recommend',[RecommendController::class,'index']);

Route::get('/majan/attendantregister',[AttendantregisterController::class,'index']);

Route::get('/majan/done',[DoneController::class,'index']);

Route::post('/majan/done',[DoneController::class,'store']);

Route::get('/majan/admingamen',[AdmingamenController::class,'index']);

Route::get('/majan/myprofile',[MyprofileController::class,'index']);

Route::get('/majan/yameru',[YameruController::class,'index']);

Route::get('/majan/detail/{user_id}',[DetailController::class,'show']);

Auth::routes();

