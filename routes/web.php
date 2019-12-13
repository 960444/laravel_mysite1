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
Route::get('posts', 'PostController@index')->name('posts.index');
Route::post('posts', 'PostController@store')->name('posts.store');
Route::get('posts/create', 'PostController@create')->name('posts.create');
Route::get('posts/user', 'PostController@user_show')->name('posts.user');
Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('posts/{id}', 'PostController@update')->name('posts.update');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');
//Comment Routes
Route::put('comments/{id}', 'CommentController@update')->name('comments.update');
Route::post('comments/{post_id}', 'CommentController@store')->name('comments.store');
Route::get('comments/{id}/edit', 'CommentController@edit')->name('comments.edit');




Route::get('/myposts', function () {
    return view('posts.myposts');
})->name('posts.myposts');

Route::get('/view', function () {
    return view('posts.show');
})->name('posts.view');




/*
Route::get('/view', function () {

})->name('posts.view');
*/

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
