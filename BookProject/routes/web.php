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
Route::get('/de', [IndexController::class, 'index']);
/*
Route::group(['prefix'=>'admin','as'=>'admin'],function(){
    Route::get('/',IndexController::class,'index');
});
*/
Route::prefix('admin')->namespace('admin')->as('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('inedx');
    
    Route::prefix('yayinevi')->namespace('yayinevi')->as('yayinevi.')->group(function(){
            Route::get('/',[App\Http\Controllers\Admin\Yayinevi\IndexController::class,'index'])->name('index');
            Route::get('/ekle',[App\Http\Controllers\Admin\Yayinevi\IndexController::class,'create'])->name('create');
            Route::post('/ekle',[App\Http\Controllers\Admin\Yayinevi\IndexController::class,'store'])->name('create.post');
            Route::get('/duzenle/{id}',[App\Http\Controllers\Admin\Yayinevi\IndexController::class,'edit'])->name('edit');
            Route::post('/duzenle/{id}',[App\Http\Controllers\Admin\Yayinevi\IndexController::class,'update'])->name('edit.post');
            Route::get('/sil/{id}',[App\Http\Controllers\Admin\Yayinevi\IndexController::class,'delete'])->name('delete');
    });
});