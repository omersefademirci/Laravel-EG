<?php

namespace App\Http\Controllers\Admin\Kitap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kitaplar;
use App\Models\Yayinevi;
use App\Models\Yazarlar;
use App\Helper\mHelper;
use App\Models\Kategoriler;
use App\Helper\ImageUpload;
use Illuminate\Support\Facades\File;
class IndexController extends Controller
{
    public function index(){

        //paginate methodu ile sayfalamayı otomatik yapabiliyoruz
        $data=Kitaplar::paginate(10);
        return view('admin.kitap.index',['data'=>$data]);
    }
    public function create(){
        
        $yazar=Yazarlar::all();
        $yayinevi=Yayinevi::all();
        $kategori=Kategoriler::all();
        return view('admin.kitap.create',['yazar'=>$yazar,'kategori'=>$kategori,'yayinevi'=>$yayinevi]);
    }
    public function store(Request $request){
        $all=$request->except('_token');
        $all['selflink']=mHelper::permalink($all['name']);
        $all['image']=ImageUpload::singleUpload(rand(1,9000),"kitap",$request->file('image'));
        
        
        $insert=Kitaplar::create($all);
        if($insert){
            return redirect()->back()->with('status','Kitap eklendi');
        }else{
            
            return redirect()->back->with('status','Kitap Eklenemedi');
        }
    }
    public function edit($id){

        $c=Kitaplar::where('id','=',$id)->count();
        if($c!=0){
            $yazar=Yazarlar::all();
            $yayinevi=Yayinevi::all();
            $data=Kitaplar::where('id','=',$id)->get();
            return view('admin.kitap.edit',['data'=>$data,'yazar'=>$yazar,'yayinevi'=>$yayinevi]);
            
        }
        else{
            return redirect('/');
        }
    }
    public function update(Request $request){
        $id=$request->route('id');
        $c=Kitaplar::where('id','=',$id)->count();
        if($c!=0){
          
            $data=Kitaplar::where('id','=',$id)->get();
            $all=$request->except('_token');
            $all['selflink']=mHelper::permalink($all['name']);
            $all['image']=ImageUpload::singleUploadUpdate(rand(1,9000),"kitap",$request->file('image'),$data,$request->file('image'));
            $update=Kitaplar::where('id','=',$id)->update($all);
            if($update){

                return redirect()->back()->with('status','Kitap Başarı ile Düzenlendi');
            }
            else{
                return redirect()->back()->with('status','Kitap Düzenlenemedi!');
            }
            
        }
        else{
            return redirect('/');
        }
    }
    public function delete($id){
        
        $c=Kitaplar::where('id','=',$id)->count();
        if($c!=0){
          
            $data=Kitaplar::where('id','=',$id)->get();
            File::delete('public/'.$data[0]['image']);
            Kitaplar::where('id','=',$id)->delete();
            return redirect()->back();

        }else{
            return redirect('/');
        }
    }
}
