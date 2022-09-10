<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IletisimModel;


class Iletisim extends Controller
{
    public function index(){

        return view("iletisim");
    }
    public function ekleme(Request $request ){

        // $_GET["adsoyad"];
        $adsoyad=$request->adsoyad;
        $telefon=$request->telefon;
        $mail=$request->email;
        $metin=$request->metin;

        IletisimModel::create([
            "adsoyad"=>$adsoyad,
            "telefon"=>$telefon,
            "mail"=>$mail,
            "metin"=>$metin,
        ]);
        
        echo "Bilgileriniz başarılı bir şekilde veri tabanına kaydedildi!";

    }
}
