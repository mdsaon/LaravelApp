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
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts','PostsController');

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
 return view ('pages.about');
});

*/

Route::get('/hello', function () {
    echo "Hello World" ;
});


Route::get('/users/{id}/{name}', function ($id,$name) {
   return 'The is user ' .$id."And".$name;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
