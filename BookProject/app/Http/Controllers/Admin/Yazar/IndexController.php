<?php

namespace App\Http\Controllers\Admin\Yazar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Yazarlar;
use App\Helper\ImageUpload;
use App\Helper\mHelper;
use File;

class IndexController extends Controller
{
    public function index(){

        $data=Yazarlar::paginate(10);
        return view('admin.yazar.index',['data'=>$data]);
    }
    public function create(){

        return view('admin.yazar.create');
    }
    public function store(Request $request){
        
        $all=$request->except('_token');
        $all['selflink']=mHelper::permalink($all['name']);
        $all['image']=ImageUpload::singleUpload(rand(1,9000),"yazar",$request->file('image'));
       
        $insert=Yazarlar::create($all);

        if($insert){
            return redirect()->back()->with('status','Yazar Eklendi');
        }
        else{
            return redirect()->back()->with('status','Yazar Eklenemedi');
        }

    }
    public function edit($id){

        $c=Yazarlar::where('id','=',$id)->count();

        if($c!=0){

            $data=Yazarlar::where('id','=',$id)->get();
            return view('admin.yazar.edit',['data'=>$data]);
        }
        else{
            return redirect('/');
        }

    }
    public function update(Request $request){
        $id=$request->route('id');
        $c=Yazarlar::where('id','=',$id)->count();

        if($c != 0){

            $data=Yazarlar::where('id',$id)->get();
            $all=$request->except('_token');
            $all['selflink']=mHelper::permalink($all['name']);
            $all['image']=ImageUpload::singleUploadUpdate(rand(1,900),"yazar",$request->file('image'),$data,"image");
            $update=Yazarlar::where('id','=',$id)->update($all);
            if($update){
                return redirect()->back()->with('status','Yazar güncelleme başarılı');
            }else{
                return redirect()->back()->whit('status','Güncelleme Başarısız');
            }
        }
        else{
            return redirect("/");
        }
    }
    public function delete($id){
        
        $c=Yazarlar::where('id','=',$id)->count();
        if($c!=0){
            $w=Yazarlar::Where('id','=',$id)->get();
            File::delete('public/images/'.$w[0]['image']);
            Yazarlar::where('id','=',$id)->delete();
            return redirect()->back();
        }
        else{
            return redirect('/');
        }
    }
}
