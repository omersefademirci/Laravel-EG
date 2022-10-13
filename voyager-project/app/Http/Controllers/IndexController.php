<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        $data = Product::paginate();

        if($data->count() > 0){          
           return view('image', ['data' => $data]);
        }
        else{
            return view('/');
        }
    }

    /*
    * 
    * */
    public function postDetail($id)
    {
        $a = Product::where('id',$id)->count();
        
        if($a >= 0){    
            $data = Product::where('id','=',$id)->get();
            return view('post.index',['data'=>$data]);
        } else {
            return redirect('/');
        }
        
    }
}
