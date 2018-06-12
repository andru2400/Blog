<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
Use Laracasts\Flash\Flash;
Use App\Http\Request\ArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderBy('id','ASC')->paginate(5);
        return view('admin.articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $tags = Tag::orderBy('name','ASC')->pluck('name','id');

         return view('admin.articles.create')
         ->with('categories', $categories)
         ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //Manipulacion de imagenes ************

        if($request->file('image'))
        {
            $file = $request->file('image');
            $name = 'blogejemplo_' . time() . '.' . $file->getClientOriginalExtension(); 
            $path = public_path() . '/images/articles/';
            $file->move($path, $name);
        }

        //************************************

        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;        
        $article->save();

        $article->tags()->sync($request->tags);
        
        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        Flash::success("Se ha creado el articulo: ".$article->title." de forma exitosa");
        return redirect()->route('articles.index');        
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article = Article::find($id);
        $article-> delete();

        flash("El Articulo " . $article->title . " a sido eliminada de forma correcta")->important();
        return redirect()->route('articles.index');
    }
}
