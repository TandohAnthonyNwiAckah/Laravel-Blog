<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
    // return env('APP_NAME');
});

// Using UserController at index.
Route::get('/user', 'UserController@index');

// Contain all Route for Authentications/
Auth::routes();


// Contain  Route for the Home.
Route::get('/home', 'HomeController@index')->name('home');


// Route for Upload images.
Route::post('/upload','UserController@uploadAvatar');

Route::get('/todos', 'TodoController@index')->name('todos');

Route::get('/todos/create','TodoController@create')->name('todos-create');

Route::post('/todos/create', 'TodoController@store');

Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todos.update');


Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todos.complete');

// Route::get('/todos/{id}/edit', 'TodoController@edit');

Route::get('/todos/{todo}/edit', 'TodoController@edit');