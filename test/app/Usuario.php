<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function grupo() { 
        return $this->belongsToMany(Estudiantes_Grupo::class); 
    }

    public function grupo2() { 
        return $this->belongsTo(Grupo::class); 
    }
}
