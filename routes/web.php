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

Route::get('/', 'postsController@index')->name('home');
Route::get('/posts/create', 'postsController@create');

Route::get('/posts/{post}', 'postsController@show'); 

Route::post('/posts', 'postsController@store'); 

Route::post('/posts/{post}/comments', 'CommentsController@store'); 


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::post('/login', ['as' => 'login', 'uses' => 'SessionsController@store']);
Route::get('/login','SessionsController@create');
Route::get('/logout','SessionsController@destroy');

