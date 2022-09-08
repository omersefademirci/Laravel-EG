<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\layouts;
use App\Http\Controllers\kitapController;


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
Route::get('/kitaplar',function(){
/*
    // \App\Models\Kitap::create(['id'=>22,'name'=>'Harry Potter - Felsefe Taşı 5','yazarid'=>1]);

    $x=\App\Models\Kitap::find(1);
    //dd($x);
    echo $x->full_name; 
*/
// $x=\App\Models\Kitap::find(1);
// $firstname=$x->name;
// echo $firstname;
/************************************* */
    /*
    $x=\App\Models\Yazarlarl::find(1)->satinal;
    foreach($x as $key=>$value){
       // dd($value);
       echo $value['code'].'<br>';
    }
    */







/********************* */
    // $x =\App\Models\Yazarlarl::find(1)->kitap;
    // // dd($x);

    // foreach($x as $key=>$value){
    //     echo $value['name'].'<br>';
    // }



    /******************************* */
    //id'si 1 olanı seçiyoruz

//     $x=App\Models\Kitap::updateOrCreate
//     (
//         ['name'=>'Harry Potter - Lanetli Çocuk'],
//         ['yazarid'=>6]
//     );
//   dd($x);

/*********************** */
    // $b = \App\Models\Kitap::get();
    // foreach($b as $user){
    //     echo $user.'<br>';
    // }
    //dd($b);
});
// 07.09.2022
Route::get('/kitap/ekle',[App\Http\Controllers\kitapController::class,'create']);
Route::post('/kitap/ekle',[App\Http\Controllers\kitapController::class,'store'])->name('kitap.ekle.post');







Route::get('/', function () {
    return view('index'); 
});
Route::get('/app',function(){
    return view('app');
});
Route::resource('/post',PostController::class);
Route::get('/users',function(){
    //$users=\Illuminate\Support\Facades\DB::table('users')->where('id','=','3')->get();
    /*
    $users=\Illuminate\Support\Facades\DB::table('users')->pluck('name','surname');
    dd($users);
    */
    /*
    foreach($users as $key=>$value){
        echo $value->Id.'=>'.$value->name.' '.$value->surname.'<br>';
    }
    */
/*
    $users=\Illuminate\Support\Facades\DB::table('users')->orderby('id')->chunk(3,function($users){
        echo '<div class="row" style="border:1px solid gray"> ';
        foreach ($users as $user) {
            echo '<div class="col-md-3">'.$user->name.'</div>';
        }
        echo '</div>';

    });

*/
/*
$users=\Illuminate\Support\Facades\DB::table('users')->count();
    dd($users);
    */
/*
    //veri ekleme
    $users=\Illuminate\Support\Facades\DB::table('users')
    ->orderBy('id','desc')
    ->limit('2')
    ->get();
    dd($users);
     // $users=\Illuminate\Support\Facades\DB::table('users')->select('id','name','surname')->get() ;
    
*/




});

