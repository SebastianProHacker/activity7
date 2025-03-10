<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    public $timestamps = false;
    
    public function kits() { 
        return $this->hasOne(Kits_de_robotica::class); 
    } 

    public function grupo() { 
        return $this->belongsToMany(Cursos_Grupo::class); 
    } 
}
