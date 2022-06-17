<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //Relacion una categorias a muchas subcategorias
    public function subcategories(){
        return $this->hasMany(Subategory::class);
    }


    //Relacion muchas categorias a muchas Brands
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //Relacion entre categorias y productos a travez de (Subcategory) 
    public function products(){
        return $this->hasManyThrough(Products::class, Subcategory::class);
    }
}
