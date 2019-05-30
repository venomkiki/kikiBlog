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


Route::name('blog_path')->get('/Blogs' ,'BlogController@index');
Route::name('create_blog_path')->get('/Blogs/create' , 'BlogController@create');
Route::name('store_blog_path')->post('/Blogs' , 'BlogController@store');

Route::name('blogs_path')->get('/Blogs/{id}' , 'BlogController@show');

Route::name('edit_blog_path')->get('/Blogs/{id}/edit', 'BlogController@edit');

Route::name('update_blog_path')->put('Blogs/{id}' , 'BlogController@update' );


Route::name('update_blog_path')->put('/Blogs/{id}' , 'BlogController@update');

Route::name('delete_blog_path')->delete('/Blogs/{id}' , 'BlogController@destroy');
