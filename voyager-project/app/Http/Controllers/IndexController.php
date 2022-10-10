<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;

class IndexController extends Controller
{
    public function index(){
        $data=Product::paginate();
        return view('image',['data'=>$data]);
        
    }
}
