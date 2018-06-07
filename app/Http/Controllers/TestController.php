<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
	public function view($id)
	{

/*
dd($id);
*/
    		$article = Article::find($id);
  		//	dd($article);
  		  
    	//	$article->category;
    	//	$article->user;
    		$article->tags;
      
           // dd($article);
      	return view('test.index',['article' => $article]);
        
	}
}
