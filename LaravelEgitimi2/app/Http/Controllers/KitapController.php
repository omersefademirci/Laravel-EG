<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources\views\kitap;

class kitapController extends Controller
{
    public function create(){

        return view('kitap.create');
    }
    public function store(Request $request){
        

    }
}
