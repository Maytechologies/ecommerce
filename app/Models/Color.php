<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model

{
    use HasFactory;

    //definimos la asignacion masiva para:
    protected $fillable = ['name'];

    //Relacion muchos colors a muchos products
    public function products(){
        return $this->belongsToMany(Products::class);
    }

    //Relacion muchos colores a muchos products
    public function sizes(){
        return $this->belongsToMany(Size::class);
    }


}
