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


//Posts Routes
Route::get('posts', 'PostController@index')->name('posts.index')
    ->middleware('auth');
Route::post('posts', 'PostController@store')->name('posts.store')
    ->middleware('auth');
Route::get('posts/create', 'PostController@create')->name('posts.create')
    ->middleware('auth');
Route::get('posts/user', 'PostController@user_show')->name('posts.user')
    ->middleware('auth');
Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit')
    ->middleware('auth');
Route::put('posts/{id}', 'PostController@update')->name('posts.update')
    ->middleware('auth');
Route::get('posts/{id}', 'PostController@show')->name('posts.show')
    ->middleware('auth');
//Comment Routes
Route::put('comments/{id}', 'CommentController@update')->name('comments.update')
    ->middleware('auth');;
Route::post('comments/{post_id}', 'CommentController@store')->name('comments.store')
    ->middleware('auth');;
Route::get('comments/{id}/edit', 'CommentController@edit')->name('comments.edit')
    ->middleware('auth');







/*
Route::get('/view', function () {

})->name('posts.view');
*/

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
