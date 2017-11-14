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

Route::get('/', 'HomeController@home');

Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@postLogin');
Route::post('/logout', 'LoginController@logout');


Route::get('/register', 'RegisterController@register');
Route::post('/register', 'RegisterController@postRegister');

Route::get('/dashboard', 'DashboardController@home');
Route::get('/all-post', 'PostController@allPost');
Route::get('/new-cover', 'PostController@addNewPost');
Route::post('/new-cover', 'PostController@savePost');