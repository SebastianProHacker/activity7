<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos_Grupo extends Model
{
    public function curso() { 
        return $this->hasMany(Curso::class); 
    } 

    public function grupo() { 
        return $this->hasMany(Grupo::class); 
    } 
}
