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
Route::get('/hello', function () {
    return '<h1>welcome</h1>';
});
Route::get('/user/{$id}/{name}', function ($id, $name) {
    return 'This is user '.$name' with an id '.$id;
});

*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/monitor', 'MonitorController@index');
