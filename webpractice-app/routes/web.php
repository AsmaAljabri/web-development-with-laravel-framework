<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services/all/{name}/{price}/{status}',[App\Http\Controllers\ServicesController::class,'index']);
Route::get('/services/{name}',[App\Http\Controllers\ServicesController::class,'getname']);


Route::get('/form/open',[App\Http\Controllers\ServicesController::class,'openform']);
Route::post('/form/submit',[App\Http\Controllers\ServicesController::class,'submitform']);
//                                                                    function name in the controller
Route::post('/file/storage',[ServicesController::class,'updatefile']);
 
Route::view('/upload-file','storageform');