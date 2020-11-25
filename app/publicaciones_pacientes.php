<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicaciones_pacientes extends Model
{
    protected $guarded=[];
    public function paciente(){
        return $this->belongsTo(User::class);
    }

    public function getPostImageAttribute($value){//Se utiliza si los datos estan ubicados en otro dominio
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
     
        return asset('storage/' . $value);
    }
    public function getAvatarAttribute($value){//Se utiliza si los datos estan ubicados en otro dominio
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
     
        return asset('storage/' . $value);
    }


}
