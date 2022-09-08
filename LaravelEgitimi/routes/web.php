<?php

use Illuminate\Support\Facades\Route;

/* Controller'ı import ediyoruz */
//use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\FormIslemleri;
// namespace App\Http\Controllers\front;
// use App\Http\Controllers\Front\IndexController;
//use App\Http\Controllers\Admin\IndexController;
//use App\Http\Controllers\Admin\kullanici\IndexController;
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test',function(){
    return view('test'); 
});
*/

/* Ornek sınıfı  üzerinde fonksiyon*/

//Route::get("/isimyazdir/{isim}",[Ornek::class,'test']); 

//Route::get("/web",[Yonet::class,'site']);

/*rooutumuza isim verebiliyoruz */
Route::get("/web",[Yonet::class,'site'])->name('web');
/*form işlemeri yolu */
Route::get("/form",[FormIslemleri::class,'gorunum']);
Route::middleware()->post("/formsonuc",[FormIslemleri::class,'formsonuc'])->name('formsonuc');
/*
/*Laravel Eğitimi Udemy */
/*
Route::get('/admin',function(){
    echo 'Burası Admin Paneli';
});

Route::get('/admin/kullancilar',function(){
    echo 'Burası Admin Paneli';
});
*/


//önyüz
/*
Route::group(['namespace'=>'Front','prefix'=>'/'],function(){
    Route::get('/', [IndexController::class, 'index'])->name('index');
});

//prefix => ön eki admin/ , as =route 'un ön adına admin.
Route::group(['namespace'=>'admin','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
    Route::group(['namespace'=>'kullanici','prefix'=>'kullanici','as'=>'kullanici.'],function(){
        Route::get('/ekle',[IndexController::class,'ekle'])->name('ekle');
    
    });
});
*/

//Route::resourse('/post',App\Http\Controllers\PostController::class);



