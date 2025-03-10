<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_de_grupo extends Model
{
    public function grupo() { 
        return $this->belongsToMany(Grupo::class); 
    }
}
