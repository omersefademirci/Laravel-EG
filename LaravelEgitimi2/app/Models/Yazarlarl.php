<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yazarlarl extends Model
{
    use HasFactory;

    public function kitap(){
      // return $this->belongsTo('\App\Models\Kitap','id','yazarid');
        
      return $this->hasMany('\App\Models\Kitap','yazarid','id');
   
    }
    public function satinal(){
        return $this->belongsToMany('App\Models\KitapSatinAl','kitap','yazarid','id');
    }
}
