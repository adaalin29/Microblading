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

Route::get('/', 'IndexController@index');
Route::get('phibrows', 'IndexController@phibrows');
Route::get('testimonials', 'IndexController@testimonials');
Route::get('contact', 'IndexController@contact');
Route::get('gallery', 'IndexController@gallery');
Route::get('classes', 'IndexController@classes');
Route::get('terms', 'IndexController@terms');
Route::get('classes-add', 'IndexController@ClassesAdd');
Route::get('class-detail', 'IndexController@ClassDetail');
Route::get('francek', 'IndexController@Francek');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
