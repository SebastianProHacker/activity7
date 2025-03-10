<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public function curso() { 
        return $this->belongsToMany(Cursos_Grupo::class); 
    }

    public function tipo_grupo() { 
        return $this->hasOne(Tipo_de_grupo::class); 
    }

    public function estudiante() { 
        return $this->belongsToMany(Estudiantes_Grupo::class); 
    }

    public function maestro() { 
        return $this->hasOne(Usuario::class); 
    }
}
