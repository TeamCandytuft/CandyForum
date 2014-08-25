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
    Schema::create('users', function($user_table){
        $user_table->increments('id');
        $user_table->string('username', 100)->unique();
        $user_table->string('password', 128);
        $user_table->string('password_confirm', 128);
        $user_table->string('name', 100);
        $user_table->string('last_name', 100);
        $user_table->string('email')->unique();
        //$user_table->string('remember_token', 100);->nullable();
        $user_table->timestamps();
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