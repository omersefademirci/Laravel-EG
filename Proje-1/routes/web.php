<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ImageController;

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


Route::prefix('/')->name('post.')->group(function(){
    
    Route::get('/',[IndexController::class,'index'])->name('home');
    Route::get('/post/{id}',[IndexController::class,'postDetail'])->name('content');
   
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
