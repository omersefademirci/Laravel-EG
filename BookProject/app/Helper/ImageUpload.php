<?php
namespace App\Helper;
use Illuminate\Support\Facades\File;
use Image;
class ImageUpload{

    static function singleUpload($name,$directory,$file){

        $rand=$name;
        $dir='images/'.$directory.'/'.$rand;
        $dirLarge=$dir.'/large';
        //file boşa eşit değilse içeri 
        if(!empty($file)){
            //dir klasörü yoksa oluştur
            if(!File::exists($dir)){
                File::makeDirectory($dir,0755,true);
            }
            //dirLarge klasörü yoksa oluştur / 0755 yazma izni
            if(!File::exists($dirLarge)){
                
                File::makeDirectory($dirLarge,0755,true);
            }
            //gelen dosyanın dosya uzantısını alma
            $filename=rand(1,90000).'.'.$file->getClientOriginalExtension();
            $path=public_path($dir.'/'.$filename);
            $path2=public_path($dirLarge.'/'.$filename);

            Image::make($file->getReaLPath())->save($path2);
            Image::make($file->getReaLPath())->resize(250,250)->save($path);

            return $dir.'/'.$filename;
        }
        else{
            return " ";
        }
    }
    static function singleUploadUpdate($name,$directory,$file,$data,$field){
        $rand=$name;
        $dir='images/'.$directory.'/'.$rand;
        $dirLarge=$dir.'/large';
        //file boşa eşit değilse içeri 
        if(!empty($file)){
            //dir klasörü yoksa oluştur
            if(!File::exists($dir)){
                File::makeDirectory($dir,0755,true);
            }
            //dirLarge klasörü yoksa oluştur / 0755 yazma izni
            if(!File::exists($dirLarge)){
                
                File::makeDirectory($dirLarge,0755,true);
            }
            File::delete('public/'.$data[0]['field']);
            //gelen dosyanın dosya uzantısını alma
            $filename=rand(1,90000).'.'.$file->getClientOriginalExtension();
            $path=public_path($dir.'/'.$filename);
            $path2=public_path($dirLarge.'/'.$filename);

            Image::make($file->getReaLPath())->save($path2);
            Image::make($file->getReaLPath())->resize(250,250)->save($path);

            return $dir."/".$filename;
        }
        else{
            return $data[0]['field'];
        }
    }
}