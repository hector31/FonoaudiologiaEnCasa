<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $guarded=[];

    public function getImageGaleryAttribute($value){//Se utiliza si los datos estan ubicados en otro dominio
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
     
        return asset('storage/' . $value);
    }
}
