<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormIslemleri extends Controller
{
    public function gorunum(){


        return view("form");
    }
    public function formsonuc(Request $request){
        
        return $request->content;
    }
}
