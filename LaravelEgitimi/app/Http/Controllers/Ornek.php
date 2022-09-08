<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ornek extends Controller
{ 
    function test($isim){
        // return 'Controller Denemesi';
        // return view('test');
        return view('ornek',['ad'=>$isim]);
        
    }
}
