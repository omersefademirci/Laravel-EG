<?php

namespace App\Http\Controllers\admin\Kategori;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategoriler;
use Helper\mHelper;

class IndexController extends Controller
{
    public function index(){
        $data=Kategoriler::paginate();
        return view('admin.kategori.index',['data'=>$data]);
    }
    public function create(){

        return view('admin.kategori.create');
    }
    public function store(Request $request){
        /*
        $name=$request->input('name');
        $selflink=mHelper::permalink($name);
        $array=['name'=>$name,'selflink'=>$selflink];
        */
        $all=$request->except('_token');
        $all['selflink']=mHelper::permalink($all['name']);

        $insert=Kategoriler::create($all);
        if($insert){
            return redirect()->back()->with('status','Kategori Başarı ile Eklendi');

        }else{
            return redirect()->back()->with('status','Kategori Eklenemedi');
        }
    }
    public function edit($id){
        $c=Kategoriler::where('id','=',$id)->count();
        if($c!=0){       
            $data=Kategoriler::where('id','=',$id)->get();
            return view('admin.kategori.edit',['data'=>$data]);
        }else{
            return redirect('/');
         }

    }
    public function update(Request $request){
        $id=$request->route('id');
        $c=Kategoriler::where('id','=',$id)->count();
        if($c!=0){       
            $all=$request->except('_token');
            $all['selflink']=mHelper::permalink($all['name']);
            
            $update=Kategoriler::where('id','=',$id)->update($all);
            if($update){
                return redirect()->back()->with('status','Kategoriler Düzenlendi');
            }else{
                return redirect()->back()->with('status','Kategoriler Düzenlenemedi');
            }
        }else{
            return redirect('/');
         }
    }
    public function delete($id){

        $c=Kategoriler::where('id','=',$id)->count();
        if($c!=0){       

        //    $data=Kategoriler::where('id','=',6)->get();
        //    $name=$data->name;
            $delete=Kategoriler::where('id','=',$id)->delete();

        //    $text=$data->name.' '.'Adlı Yayin Evi Silindi!';
            
            return redirect()->back()->with('status','Kategori Silindi!');
        }else{
            return redirect('/');
         }

    }
}
