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
    return view('index');
});

//Route::resource('blog','PostsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog', 'PostsController@index');


Route::get('/blog/{title}', 'PostsController@show')->name('blog.show');
Route::get('/contact', function(){
    return view('contact');
});

//Comments
Route::post('/blog/{title}', 'CommentsController@store')->name('edit.comments');

include('admin_routes.php');
