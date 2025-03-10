<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiantes_Grupo extends Model
{
    public function grupo() { 
        return $this->hasMany(Grupo::class); 
    } 

    public function estudiante() { 
        return $this->hasMany(Usuario::class); 
    } 
}
