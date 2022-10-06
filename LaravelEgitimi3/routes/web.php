<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facedes\Cache;
use App\Models\User;
use App\Events\BlogAdded;
use App\Http\Controllers\PostController;

//Stroge - 1
Route::get('/get', function () {
   echo '<form action="/post" enctype="multipart/form-data" method="POST">'.csrf_field(); 
        
        echo '<input type="file" multiple name="photos[]">
        <button>Post</button>
        </form>';
    
});
//Tek foto
/*
Route::post('/post',function(Request $request){
      //  $file=$request->file('photo')->store('photos');
      $file=$request->file('photo');
      $filename="resim.".$file->getClientOriginalExtension();
      $path=$file->storeAs('photos',$filename);
      dd($path);
});
*/
//Çoklu Foto
/*
Route::post('/post',function(Request $request){
      $images=$request->file('photos');
      
      $path=[];
      foreach($images as $image){
            
            $name="123-".rand(1,90).'.'.$image->getClientOriginalExtension();
            $file=$image->storeAs('photos',$name);
            //$file=$image->store('photos');
            $path[]=$file;
      }
      dd($path);

});*/
//Dosya Kontrolü
Route::post('/post',function(Request $request){
     //Görsel kontrol işlemi
      $control =Storage::disk('local')->exists('photos/123-17.jpg');

      //    Dosya oluşturma
     // Storage::put('photos/file.txt','Udemy');

      //    Ekleme işlemi 
    //  Storage::append('photos/file.txt','Udemy2');
      //dd($control);

      //    Dosya kontrol işlemi
    //  $c=Storage::exists('photos/file.txt');
     

      //    Dosya indirme işlemi
      //return Storage::download('file.txt','name-alanı');

      //url alma
    //$url=Storage::url('file.txt');
    //$dd(url);

    //Dosya boyutu alma // byte türünde geliyo
    //$url=Storage::size('file.txt');
    //dd($url);

      // Son dEğişklik tarhini görme
      //unix type set türünde veriyor -> 
    //$url=date("Y-m-d H.i:s",Storage::lastModified('file.txt'));
    //dd($url);

    //Dosya Kopyalama
      //$url=Storage::copy('file.txt','/photos/file2.txt');
      //dd($url);

      //Dosya Taşıma
      //$url=Storage::move('photos//file2.txt','storage/app/');
      //dd($url);

      //Dosya silme
      $url=Storage::delete('file.txt');
      dd($url);

});

//Laravel - Veri Depolama -Listeleme Görme ve Kontrol Etme - Cache 

Route::get('/cache',function(){
      //key,value,saniye-kaç saniye kalsın
      Cache::put('site_name','omersefademirci.com',120);
      echo Cache::get('site_name');
});

//Laravel - Event Listener

Route::get('/user-ekle',function(){
     $user= User::create([
      'name'=>'Sefa',
      'password'=>'sefa1234',
      'email'=>'omersefademirci@gmail.com',
      
     ]);
     event(new BlogAdded($user));
});

Route::resource('/post',\App\Http\Controllers\PhotoController::class)


      //Route model binding-> bulunamadağı zaman belirtildiği sayfaya atar.
      ->missing(function(Request $request){
            return Redirect::route('post.index');
});


Route::get('/response',function(){
      return response('Hello World',200)->header('Content-type','text/plain');
});
Route::get('/deneme',function(){
      return view('index');
});

//Blade

Route::get('/blade',function(){
      $name="Ömer Sefa";
      $surname="Demirci";
      return view('blades',compact('name','surname'));

});

//Session
Route::get('/session',function(){
    //  session(['sitename'=>'abc.com']);
     // session()->save();

     //     kontrol etme
     // dd(session()->has('sitename'));
      
     //     ekleme
    // session()->push('user.name','developers');

    //      session -> arttırma - eksiltme
    //session(['count'=>1]);
    //      arttırma
    //session()->increment('count',3);
    //      eksiltme
    //session()->decrement('count',1);  
    //dd(session("count"));
     //dd(session("sitename","omersefademirci.com"));

     dd(session()->all());
     
     //     sitename silme
     //session()->forget("sitename");
     //session()->save();
     
     //     komple session silme
     //session()->flush('sitename');

     //     session geçerlilik tarihi alma 
     //session()->invalidate();


     
});

//validation
Route::resource('/post',PostController::class);