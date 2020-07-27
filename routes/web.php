<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

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
Route::post('/upload',function(Request $request){

$request->image->store('images','public');
    
return "Uploaded";
// dd($request->image());

});
