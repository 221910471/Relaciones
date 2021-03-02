<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    public function Modulo(){
        return $this->hasMany(Modulo::class);
     }
     // N:M
     public function Alumno(){
         return $this->belongsToMany(Alumno::class)->withPivot('alumno_id');
     }
}
