<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kits_de_robotica extends Model
{
    public function curso() { 
        return $this->belongsToMany(Curso::class); 
      } 
}
