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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//gestione pubblica:
Route::get('/blog','PostController@index')->name('blog');
Route::get('/blog/{slug}','PostController@show')->name('blog-page');

//Post visualizzati con Vue
Route::get('/vue-posts','PostController@vuePosts')->name('vue-posts');



//gestione privata:
Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        
        Route::resource('posts','PostController');
    });




