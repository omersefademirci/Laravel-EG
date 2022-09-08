<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitap extends Model
{
    protected $table="kitap";

    //veri tabanında sütünları söyler
    protected $fillable=['id','name','yazarid'];
    //veri tabanında eklemek istemediklerini belirtir
    protected $guarded=[];
    public $timestamps=false;
    use HasFactory;

    public function yazar(){
        return $this->hasOne('\App\Models\Yazarlarl','id','yazarid');
    }

    public function getNameAttribute($value){
        return ucfirst($value);
    }
    public function setNameAttribute($value){
        $this->attributes['name']=strtoupper($value);
    }
    
}
