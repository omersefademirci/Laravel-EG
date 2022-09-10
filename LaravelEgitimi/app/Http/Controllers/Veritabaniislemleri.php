<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Veritabaniislemleri extends Controller
{
    public function ekle(){
        
        DB::table('bilgiler')->insert([
            "metin"=>"Bu örnek bir metin bilgisidir"
        ]);

    }
    public function update(){
        DB::table('bilgiler')->where("id","=",1)->update([
            "metin"=>"Bu örnek 1 metin bilgisidir"
        ]);
    }
    public function delete(){
        DB::table("bilgiler")->where("id","=",1)->delete();
    }
    public function info(){
        //bütün hepsi için
        /*
        $datas=DB::table("bilgiler")->get();

        foreach($datas as $key =>$value){
                echo $value->metin."<br>";
        }

        //print_r($datas);
    */
    $data=DB::table("bilgiler")->where("id","=",2)->first();
    echo $data->metin;
    /*
        $id=0;
        while($id==0){
            
            $data=DB::table("bilgiler")->where("id","=",$id)->first();
            if($data->metin==" "){
                $id++;           
            }
            else{
                echo $data->metin;
                $id==0;
                break;
            }
        }
     */
       

    }
}
