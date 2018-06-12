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
    return view('auth.login');
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('users','UsersController');
	
	Route::get('users/{id}/destroy', [
	'uses' => 'UsersController@destroy',
	'as' => 'admin.users.destroy'
	]);

	Route::get('users/{id}/edit', [ 
		'uses' => 'UsersController@edit', 
		'as' => 'admin.users.edit'
	]);

	//*****************************************************

	Route::resource('categories','CategoriesController');
	
	Route::get('categories/{id}/destroy', [
	'uses' => 'categoriesController@destroy',
	'as' => 'admin.categories.destroy'
	]);

	Route::get('categories/{id}/edit', [ 
		'uses' => 'CategoriesController@edit', 
		'as' => 'admin.categories.edit'
	]);

	//*****************************************************

	Route::resource('tags','TagsController');
	
	Route::get('tags/{id}/destroy', [
	'uses' => 'tagsController@destroy',
	'as' => 'admin.tags.destroy'
	]);

	Route::get('tags/{id}/edit', [ 
		'uses' => 'TagsController@edit', 
		'as' => 'admin.users.edit'
	]);


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

Auth::routes();

//**********************************************

Route::get('admin/auth/login', [
    'uses'  => 'Auth\LoginController@showLoginForm',
    'as'    => 'admin.auth.login'
]);

Route::post('admin/auth/login', [
    'uses'  => 'Auth\LoginController@login',
    'as'    => 'admin.auth.login'
]);

Route::get('admin/auth/logout', [
    'uses'  => 'Auth\LoginController@logout',
    'as'    => 'admin.auth.logout'
]);

//**********************************************

Route::get('/home', 'HomeController@index')->name('home');

