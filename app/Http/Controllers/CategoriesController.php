<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Category;
Use Laracasts\Flash\Flash;
Use App\Http\Requests\CategoryRequest;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','ASC')->paginate(5);
        return view('admin.categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //Guardar ->1 forma(Se puede $user = new App\User(); o la 2, $user = new User(); incluimos en la parte de arriba Use App\User; )
      

        $category = new Category($request->all());        
        $category->save();        
        Flash::success("Se ha registrado la categoria : ".$category->name." de forma exitosa");
        return redirect()->route('categories.index');
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
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
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
        
         /*La forma mas usada es :
            $category = Category::find($id)
                {  
                $category->fill($request->all());
                }

        */


        $category = Category::find("$id");
        $category->name = $request->name;        
        $category->save();

        flash::warning('La categoria'. $category->name.'ha sido  editado con exito');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category-> delete();

        flash("La categoria  " . $category->name . " a sido eliminada de forma correcta")->important();
        return redirect()->route('categories.index');
    }
}

//311 461 7333 Julio
