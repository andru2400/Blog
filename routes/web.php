<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// GET, POST, PUT, DELETE, RESOURCE CON LAS QUE VAMOS A TRABAJAR

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
	Route::resource('users','UsersController');
});
/*
Route::get('articles/{nombre}', function($nombre) {
echo "El nombre es ".$nombre;
});
*/

/*
Route::get('articles', function() {
echo "Esta es la seccion de articulos";
});
*/

/*
Route::group(['prefix' => 'articles'], function(){
 Route::get('view/{article?}', function($article = "Vacio"){
  echo $article;
 });
});
*/

/*
Route::group(['prefix' => 'articles'] ,function(){
 
 Route::get('view/{id}',[
 	'uses' => 'TestController@view',
 	'as'   => 'articlesView'
 	]);
});

*/
