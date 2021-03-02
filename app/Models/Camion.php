<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;
    // un camion lleva muchos paquetes 1:N
    public function Paquete(){
       return $this->hasMany(Paquete::class);
    }
    // N:M
    public function Camionero(){
        return $this->belongsToMany(Camionero::class);
    }

}
