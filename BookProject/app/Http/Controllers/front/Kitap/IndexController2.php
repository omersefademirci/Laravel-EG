<?php

namespace App\Http\Controllers\front\Kitap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kitaplar;
class IndexController2 extends Controller
{
    public function index($selflink){

        $c=Kitaplar::where('selflink',"=",$selflink)->count();
        if($c!=0){
            $w=Kitaplar::where('selflink','=',$selflink)->get();
            return view('front.kitap.index',['data'=>$w]);
        }
        else{
            return redirect('/');
        }
    }
}
