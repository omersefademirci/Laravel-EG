<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Helper\ImageUpload;

class IndexController extends Controller
{
    public function index(){
        $data=Slider::paginate(10);
        return view('admin.slider.index',['data'=>$data]);
    }
    public function create(){
        return view ('admin.slider.create');
    }
    public function store(Request $request){
        $all['image']=ImageUpload::singleUpload(rand(1,9000),"slider",$request->file('image'));
        if($all['image']!=""){
            $insert=Slider::create($all);
            if($insert){
                return redirect()->back()->with('status','Slider eklendi');
            }
            else{
                return redirect()->back()->with('status','Slider eklenemedi');
            }
        }
        else{
            return redirect()->back()->with('status','Slider eklenemedi');
        }
       
    }
    public function edit($id){
        $data=Slider::where('id','=',$id)->get();
        return view('admin.slider.index',['data'=>$data]);
    }
    public function update(Request $request){
        $id=$request->route(id);
        $all['image']=ImageUpload::singleUpload(rand(1,9000),"slider",$request->file('image'),$data,"image");
        $data=Slider::where('id','=',$id)->get();
        if($all['image']!=""){
            $insert=Slider::where('id','=',$id)->update($all);
            if($insert){
                return redirect()->back()->with('status','Slider Düzenlendi');
            }
            else{
                return redirect()->back()->with('status','Slider Düzenlenemedi');
            }
        }
        else{
            return redirect()->back()->with('status','Slider Düzenlenemedi');
        }
       
    }
    public function delete($id){
        $data=Slider::where('id','=',$id)->delete();
        return redirect()->back();
    }
}
