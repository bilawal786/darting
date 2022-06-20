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


Auth::routes();


Route::group(['middleware' => ['auth']], function() {

    Route::get('/dashboard', 'Front\FrontendController@dashboard')->name('front.dashboard');
    Route::get('/profile', 'Front\FrontendController@profile')->name('front.profile');
    Route::get('/activity', 'Front\FrontendController@activity')->name('front.activity');
    Route::get('/front/function', 'Front\FrontendController@function')->name('front.function');
    Route::post('/front/profiles', 'Front\FrontendController@profiles')->name('front.profiles');
    Route::get('/front/profiles', 'Front\FrontendController@profiles')->name('front.profiles');
    Route::get('/activity/create', 'Front\FrontendController@activityCreate')->name('activity.create');
    Route::get('/my/profile', 'Front\FrontendController@myProfile')->name('my.profile');

});

Route::group(['middleware' => ['auth', 'role']], function() {

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/sports', 'Admin\SportsController@index')->name('admin.sports');

});
