<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    /*
    Schema::create('users', function($newtable)
        {
            $newtable->increments('id');
            $newtable->string('username', 100)->unique();
            $newtable->string('password', 128);
            $newtable->string('name', 100);
            $newtable->string('last_name', 100);
            $newtable->string('email')->unique();
            $newtable->string('remember_token', 100)->nullable();
            $newtable->timestamps();
        });

    Schema::create('posts', function($post_table){
        $post_table->increments('id');
        $post_table->string('header', 200);
        $post_table->string('content', 100);
        $post_table->string('tags', 200);
        $post_table->integer('author_id');
        $post_table->integer('category_id');
        $post_table->timestamps();
    });

    Schema::create('categories', function($category_table){
        $category_table->increments('id');
        $category_table->string('name', 100)->unique();
        $category_table->timestamps();
    });
    Schema::create('tags', function($tag_table){
        $tag_table->increments('id');
        $tag_table->string('name', 100)->unique();
        $tag_table->timestamps();
    });
    */
	return View::make('index');
});

Route::get('/register', array('uses' => 'HomeController@showRegister'));

Route::post('/register', array('uses' => 'HomeController@doRegister'));

Route::get('/login', array('uses' => 'HomeController@showLogin'));

Route::post('/login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('spotlight', array(
    'before' => 'auth' ,
    function()
{
    return View::make('spotlight');
}
));

/* --- POSTS ROUTES --- */
Route::get('posts', array('before' => 'auth', 'uses' => 'PostController@index'));
Route::post('posts', array('before' => 'csrf', 'uses' => 'PostController@store'));
Route::get('posts/create', array('before' => 'auth', 'uses' => 'PostController@create'));
Route::get('posts/show/{id}', array('uses' => 'PostController@show@$id'));