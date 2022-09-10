<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;

class ModelIslemleri extends Controller
{
    public function liste(){
        
      //  $bilgi=Bilgiler::where("id",">=",1)->get();
      //  $bilgi=Bilgiler::get();
      //  $bilgi=Bilgiler::where("id","=",2)->first();
      $bilgi=Bilgiler::whereId(2)->first();
        echo $bilgi->metin;
    }
    public function ekle(){
        
        Bilgiler::create([
            "metin"=>"Model dosyası ile eklendi",
        ]);

    }
    public function guncelle(){
        Bilgiler::whereId(2)->update([
            "metin"=>"Bu alan model ile güncellendi",
        ]);
    }
    public function sil(){
        Bilgiler::whereId(2)->delete();
    }
}
