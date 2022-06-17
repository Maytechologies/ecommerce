<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    //Indicamos cuales son lo campos que NO Permitiremos asignacion masiva
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion un producto a muchas categorias
    public function products(){
        return $this->hasMany(Products::class);
    }

    //Relacion una Categoria Muchas Subcategorias
    public function category(){

        return $this->belongsTo(Category::class);

    }
}
