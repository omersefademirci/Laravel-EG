<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UyelikIslemleri extends Controller
{
    public function uyeKayit(Request $uyebilgileri){
        
        //özelliklerini belirticez, psot ile gelen tüm bilgileri kontrol edebilmeyi sağlayan yapı
        $uyebilgileri->validate([
            //önce boş bırakalamz, sonra min 3 karakter uzunluk,max 50 karakter
            "adsoyad"=>"required|min:3|max:50",
            "telefon"=>"required|min:10|max:12",
            "email"=>"required|email"

        ]);
        echo "Form bilgileri başarılı bir şekilde geçti.";

    }
}
