<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
     // Definimos el modelo y mostramos los atributos que queremos mostrar
    protected $table = "images";
    protected $fillable = ['name','article_id'];

    public function article()
    {
      return $this->belongsTo('App\Article');  
    }
}

