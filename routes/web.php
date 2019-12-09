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

Route::get('/', function () {
    return view('welcome');
});



Route::get('posts', 'PostController@index')->name('posts.index');




Route::get('/myposts', function () {
    return view('posts.myposts');
})->name('posts.myposts');

Route::get('/view', function () {
    return view('posts.view');
})->name('posts.view');

Route::get('/edit', function () {
    return view('posts.edit');
})->name('posts.edit');

Route::get('/create', function () {
    return view('posts.create');
})->name('posts.create');

/*
Route::get('/view', function () {
    
})->name('posts.view');
*/

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
