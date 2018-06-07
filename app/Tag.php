<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     // Definimos el modelo y mostramos los atributos que queremos mostrar
    protected $table = "tags";
    protected $fillable = ['name'];

    public function articles()
    {
      return $this->belongsToMany('App\Article')->withTimestamps();  
    }
}