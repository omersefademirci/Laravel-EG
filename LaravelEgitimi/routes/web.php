<?php

use Illuminate\Support\Facades\Route;

/* Controller'ı import ediyoruz */
//use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\FormIslemleri;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\ModelIslemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\ResimYukle;
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
Route::get("/",[Yonet::class,'site'])->name('web');
/*form işlemeri yolu */
Route::get("/form",[FormIslemleri::class,'gorunum']);
//middelware
Route::middleware('arakontrol')->post("/formsonuc",[FormIslemleri::class,'formsonuc'])->name('formsonuc');
//DB
Route::get("/add",[Veritabaniislemleri::class,"ekle"]);
Route::get("/update",[Veritabaniislemleri::class,"update"]);
Route::get("/delete",[Veritabaniislemleri::class,"delete"]);
Route::get("/listele",[Veritabaniislemleri::class,"info"]);
//Model
Route::get("/modellist",[ModelIslemleri::class,"liste"]);
Route::get("/modelekle",[ModelIslemleri::class,"ekle"]);
Route::get("/modelguncelle",[ModelIslemleri::class,"guncelle"]);
Route::get("/modelsil",[ModelIslemleri::class,"sil"]);
//Request
Route::get("/iletisim",[Iletisim::class,"index"]);
Route::post("/iletisim-sonuc",[Iletisim::class,"ekleme"])->name("iletisim-sonuc");
//İmg Upload
Route::get("/upload",function(){
    return view('upload');
});
Route::post("/resim-ilet",[ResimYukle::class,'resimYukleme'])->name('yukle');
//Uyelikİslemleri
Route::get('/uye',function(){
    return view('uyelik');
});
Route::post('/uye-kayit',[App\Http\Controllers\UyelikIslemleri::class,'uyeKayit'])->name('uyekayit');
//Yield- Tema Parçalama
Route::get('/anasayfa',function(){
    return view('sayfalar.home');
});

//Resim Boyutlandırma
Route::get('/resim',function(){
    /*
    $img=Image::make('images/986.jpg')->resize(300,300);
    $img->save("images/php_oran.jpg");
    return $img->response('jpg');
    */
    $img = Image::make('images/yeni-resim.jpg')->greyscale();

    return $img->response('jpg');
});
Route::post("/resim-yukle",function(){
    Image::make(request()->file('resim'))->resize(300,300)->save('images/yeni-resim.jpg');
})->name("resim-yukle");




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



