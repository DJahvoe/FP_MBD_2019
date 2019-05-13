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

Route::get('/user', 'PagesController@user');

Route::get('/', 'PagesController@home');
Route::get('/quiz', 'PagesController@quiz');
Route::get('/course', 'PagesController@course');
Route::get('/search', 'PagesController@search');
Route::get('/search/N{K_JLPT}', 'PagesController@searchJLPT');
Route::get('/search/J{K_Jouyou}', 'PagesController@searchJouyou');

Route::resource('/customs', 'CustomsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
