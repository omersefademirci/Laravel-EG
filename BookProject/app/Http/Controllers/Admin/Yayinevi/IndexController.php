<?php

namespace App\Http\Controllers\admin\Yayinevi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\mHelper;
use App\Models\YayinEvi;
class IndexController extends Controller
{
    public function index(){

        //paginate methodu ile sayfalamayı otomatik yapabiliyoruz
        $data=YayinEvi::paginate();
        return view('admin.yayinevi.index',['data'=>$data]);
    }
    public function create(){

        return view('admin.yayinevi.create');
    }
    public function store(Request $request){
        /*
        $name=$request->input('name');
        $selflink=mHelper::permalink($name);
        $array=['name'=>$name,'selflink'=>$selflink];
        */
        $all=$request->except('_token');
        $all['selflink']=mHelper::permalink($all['name']);

        $insert=YayinEvi::create($all);
        if($insert){
            return redirect()->back()->with('status','Yayin Evi Başarı ile Eklendi');

        }else{
            return redirect()->back()->with('status','Yayin Evi Eklenemedi');
        }
    }
    public function edit($id){
        $c=YayinEvi::where('id','=',$id)->count();
        if($c!=0){       
            $data=YayinEvi::where('id','=',$id)->get();
            return view('admin.yayinevi.edit',['data'=>$data]);
        }else{
            return redirect('/');
         }

    }
    public function update(Request $request){
        $id=$request->route('id');
        $c=YayinEvi::where('id','=',$id)->count();
        if($c!=0){       
            $all=$request->except('_token');
            $all['selflink']=mHelper::permalink($all['name']);
            
            $update=YayinEvi::where('id','=',$id)->update($all);
            if($update){
                return redirect()->back()->with('status','Yayin Evi Düzenlendi');
            }else{
                return redirect()->back()->with('status','Yayin Evi Düzenlenemedi');
            }
        }else{
            return redirect('/');
         }
    }
    public function delete($id){

        $c=YayinEvi::where('id','=',$id)->count();
        if($c!=0){       

        //    $data=YayinEvi::where('id','=',6)->get();
        //    $name=$data->name;
            $delete=YayinEvi::where('id','=',$id)->delete();

        //    $text=$data->name.' '.'Adlı Yayin Evi Silindi!';
            
            return redirect()->back()->with('status','Yayin Evi Silindi!');
        }else{
            return redirect('/');
         }

    }
}
