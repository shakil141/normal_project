<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
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


Route::resource('/',LoginController::class)->only('index','store');

Route::group(['prefix' =>'backend'],function(){

    Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');

    Route::resource('categories',CategoryController::class);
});
