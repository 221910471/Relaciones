<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;
    // N:M
    public function Libro(){
        return $this->belongsToMany(Libro::class);
    }
}
