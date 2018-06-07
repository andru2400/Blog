<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Definimos el modelo y mostramos los atributos que queremos mostrar
    protected $table = "categories";
    
    protected $fillable = ['name'];

    //debemos crear una funcion publica, vamos a implementar uno a muchos (Ejm: Categoria - Articulos) Establecemos la relacion

    public function articles()
    {
      return $this->hasMany('App\Article');     	
    }




}
