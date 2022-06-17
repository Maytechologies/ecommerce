<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

       protected $guarded = ['id', 'created_at', 'updated_at'];

   //Relacion muchos sizes a un products
   public function sizes(){
       return $this->hasMany(Size::class);
   }
    

    //Realacion una Brand a muchos  Products (inversa)
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

     //Realacion una Subcategory a muchos  Products (inversa)
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //Realacion muchos colores a muchos  Productos
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    //relacion un productos a muchas imagenes (polimorfica)
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }
}
