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

Route::get('/register', function()
{
    return View::make('register');
});

Route::post('/register', function()
{
    $users = new User;    
    $users->username = Input::get('username');
    $users->password = Hash::make(Input::get('password'));
    $users->password_confirm = Hash::make(Input::get('password_confirm'));
    $users->name = Input::get('name');
    $users->last_name = Input::get('last_name');
    $users->email = Input::get('email');
    $users->save();
    
    $name = Input::get('name');       
    return View::make('thanks')->with('name', $name);    
});/*1.29*/

Route::get('/login', function()
{
    return View::make('login');
});

Route::post('/login', function()
{
    $credentials = Input::only('username', 'password');

    if (Auth::attempt($credentials)) {
    return Redirect::intended('/posts');
    }
    return Redirect::to('login');
});

Route::get('/logout', function()
{
    Auth::logout();
    return View::make('logout');
});

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