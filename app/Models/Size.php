<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Size extends Model
{
    use HasFactory;

    //definimos la asignacion masiva para:
    protected $fillable = ['name', 'product_id'];

    //Relacion un product muchas Sizes
    public function Product(){
        return $this->belongsTo(Products::class);
    }

    //Relacion muchos Colors a muchas Sizes
    public function colors(){
        return $this->belongsToMany(Color::class);
    }
}
