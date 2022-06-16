<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Front\FrontendController@index')->name('front.index');
Route::get('/wizard/form', 'Front\FrontendController@wizard')->name('front.wizard');
Route::get('/front/function', 'Front\FrontendController@function')->name('front.function');
Route::post('/find/match', 'Front\FrontendController@findMatch')->name('find.match');
Route::post('/front/profiles', 'Front\FrontendController@profiles')->name('front.profiles');


Auth::routes();


Route::group(['middleware' => ['auth', 'role']], function() {

Route::get('/home', 'HomeController@index')->name('home');

});
