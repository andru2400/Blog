<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
// ya no se usa Interface ni Trait

class Article extends Model
{

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

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
