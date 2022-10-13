<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    /* Homepage Data */
    public function index($locale='tr')
    {
        
        $data = Product::paginate();
        
        if($data->count() > 0){
            
            $data=Product::get()->translate($locale);
           
            
            
            return view('image', ['data' => $data]);
        }
        else{
            return view('/');
        }
    }

    /* Post Detail Get Data  */
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
