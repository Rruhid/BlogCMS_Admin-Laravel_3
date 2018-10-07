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

Route::group(['namespace'=>'User'],function(){
Route::get('/','HomeController@index');
Route::get('post/{post}','PostController@post')->name('post');
Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
Route::get('post/category/{category}','HomeController@category')->name('category');

});

Route::get('about/','Admin\AboutController@index')->name('about');

Route::group(['namespace'=>'Admin'],function(){
        Route::get('admin/home','HomeController@index')->name('admin.home');
        Route::resource('admin/user', 'UserController');
        //post routes
        Route::resource('admin/post', 'PostController');
        //tags routes
        Route::resource('admin/tag', 'TagController');
        //categories route
        Route::resource('admin/category', 'CategoryController');

});

Auth::routes();

