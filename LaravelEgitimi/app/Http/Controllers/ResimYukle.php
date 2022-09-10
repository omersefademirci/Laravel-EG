<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResimYukle extends Controller
{
    public function resimYukleme(Request $request){

        //getClientOriginalName -> Dosya isminin tamamını alır
        //getClientOriginalExtension -> Dosya isminin uzantısını alır.
        //Görseli herkese açık yüklemek istiyor isek public klasörü
        //Görseli herkese kapalı yüklemekj istiyor isek storage/app klasörü altına yüklüyoruz.
        $resimadi=rand(0,1000).".".$request->resim->getClientOriginalExtension();
        //Dosya yolu
        $yukle=$request->resim->move(public_path('images'),$resimadi);

    }
}
