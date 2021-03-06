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

Route::get('/single', 'SingleController@show') -> name('single');
Route::get('/elements', 'ElementsController@show') -> name('elements');
Route::get('/portfolio', 'PortfolioController@show') -> name('portfolio');
Route::get('/contact', 'ContactController@show') -> name('contact');
Route::get('/article', 'ArticleController@show') -> name('article');
