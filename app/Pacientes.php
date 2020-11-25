<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pacientes extends Model
{
    protected $guarded=[];
    //
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
    public function users(){
        return $this->belongsToMany(User::class,'fono_paciente', 'fono_id', 'paciente_id');
    }
}
