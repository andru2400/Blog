<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     // Definimos el modelo y mostramos los atributos que queremos mostrar
    protected $table = "articles";
    
    protected $fillable = ['title','content','category_id','user_id'];

    public function category() 
    {
      return $this->belongsTo('App\Category');
      //return $this->belongsTo('App\Category','id');  
    }

 	public function user()
    {
      return $this->belongsTo('App\User');  
    }

    public function images()
    {
      return $this->hasMany('App\Image');    	
    }

	public function tags()
    {
      return $this->belongsToMany('App\Tag')->withTimestamps();  
    }


}
