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
	return View::make('hello');
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
    return Redirect::intended('/');
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


/*
|    {id} - dinamic
|    {id?} - optional
*/  

Route::get('/user', function()
{
    echo 'user';
});

Route::get('/user/{id}', function($id)
{
    echo 'user ' . $id;
});











