<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FormKontrol
{
    /*
        İstek Request'e düşüyor.
        İşlem başarılı ise Closure'e yönlendiriyor.
        Sonucu geri atıyor
    
    */
    public function handle(Request $request, Closure $next)
    {
        if($request->content=="elma"){
            //programı iptal edip anasayfaya yönlendirir.
            // back ile bir geriye yönlendirir.
            return redirect()->back();

        }
        return $next($request);
    }
}
