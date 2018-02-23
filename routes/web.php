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

/*
|
| Route::get
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', array('as' => 'login', 'uses' => 'AuthController@login'));
Route::get('/home', ['middleware' => 'auth','as' => 'home', 'uses' => 'UsersController@home']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);


/*
|
| Route::post
|
*/

Route::post('/handleLogin', array('as' => 'handleLogin', 'uses' => 'AuthController@handleLogin'));

/*
|
| Route::resource
|
*/

Route::resource('users', 'UsersController', ['only' => ['create', 'store']]);


