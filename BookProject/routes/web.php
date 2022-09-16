<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Yayinevi\IndexController;
use App\Http\Controllers\Admin\Yazar\IndexController as YazarIndexController;
use App\Http\Controllers\Admin\Kategori\IndexController as KategoriIndexController;
use App\Http\Controllers\Admin\Slider\IndexController as SliderIndexController;
use App\Http\Controllers\Admin\Kitap\IndexController as KitapIndexController;
use App\Http\Controllers\Front\IndexController as FrontIndexController;
use App\Http\Controllers\Front\Kitap\IndexController as FKIndexController ;

Route::get('/',[FrontIndexController::class,'index'])->name('index');
Route::get('/kitap/detay/{selflink}',[FKIndexController::class,'index'])->name('kitap.detay');
/*
Route::group(['prefix'=>'admin','as'=>'admin'],function(){
    Route::get('/',IndexController::class,'index');
});
*/
Route::prefix('admin')->namespace('admin')->as('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('index');    
    Route::prefix('yayinevi')->namespace('yayinevi')->as('yayinevi.')->group(function(){
            Route::get('/',[IndexController::class,'index'])->name('index');
            Route::get('/ekle',[IndexController::class,'create'])->name('create');
            Route::post('/ekle',[IndexController::class,'store'])->name('create.post');
            Route::get('/duzenle/{id}',[IndexController::class,'edit'])->name('edit');
            Route::post('/duzenle/{id}',[IndexController::class,'update'])->name('edit.post');
            Route::get('/sil/{id}',[IndexController::class,'delete'])->name('delete');
    });
    //writers
    Route::prefix('yazar')->namespace('yazar')->as('yazar.')->group(function(){
        Route::get('/',[YazarIndexController::class,'index'])->name('index');
        Route::get('/ekle',[YazarIndexController::class,'create'])->name('create');
        Route::post('/ekle',[YazarIndexController::class,'store'])->name('create.post');
        Route::get('/duzenle/{id}',[YazarIndexController::class,'edit'])->name('edit');
        Route::post('/duzenle/{id}',[YazarIndexController::class,'update'])->name('edit.post');
        Route::get('/sil/{id}',[YazarIndexController::class,'delete'])->name('delete');
    });
    Route::prefix('kitap')->namespace('kitap')->as('kitap.')->group(function(){
        Route::get('/',[KitapIndexController::class,'index'])->name('index');
        Route::get('/ekle',[KitapIndexController::class,'create'])->name('create');
        Route::post('/ekle',[KitapIndexController::class,'store'])->name('create.post');
        Route::get('/duzenle/{id}',[KitapIndexController::class,'edit'])->name('edit');
        Route::post('/duzenle/{id}',[KitapIndexController::class,'update'])->name('edit.post');
        Route::get('/sil/{id}',[KitapIndexController::class,'delete'])->name('delete');
    });
    Route::prefix('kategori')->namespace('kategori')->as('kategori.')->group(function(){
        Route::get('/',[KategoriIndexController::class,'index'])->name('index');
        Route::get('/ekle',[KategoriIndexController::class,'create'])->name('create');
        Route::post('/ekle',[KategoriIndexController::class,'store'])->name('create.post');
        Route::get('/duzenle/{id}',[KategoriIndexController::class,'edit'])->name('edit');
        Route::post('/duzenle/{id}',[KategoriIndexController::class,'update'])->name('edit.post');
        Route::get('/sil/{id}',[KategoriIndexController::class,'delete'])->name('delete');
        Route::get('/getData',[KategoriIndexController::class,'getData'])->name('getData');
    });
    Route::prefix('slider')->namespace('slider')->as('slider.')->group(function(){
        Route::get('/',[SliderIndexController::class,'index'])->name('index');
        Route::get('/ekle',[SliderIndexController::class,'create'])->name('create');
        Route::post('/ekle',[SliderIndexController::class,'store'])->name('create.post');
        Route::get('/duzenle/{id}',[SliderIndexController::class,'edit'])->name('edit');
        Route::post('/duzenle/{id}',[SliderIndexController::class,'update'])->name('edit.post');
        Route::get('/sil/{id}',[SliderIndexController::class,'delete'])->name('delete');
    });
});