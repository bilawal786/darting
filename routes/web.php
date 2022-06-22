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

//user
    Route::post('/user/update','Front\UserController@update')->name('user.update');
});

Route::group(['middleware' => ['auth', 'role']], function() {

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/sports', 'Admin\SportsController@index')->name('admin.sports');
Route::get('/admin/sports/edit/{id}', 'Admin\SportsController@edit')->name('admin.sports.edit');
Route::get('/admin/sports/create', 'Admin\SportsController@create')->name('admin.sports.create');
Route::post('/admin/sports/store', 'Admin\SportsController@store')->name('admin.sports.store');
// Sorties
 Route::get('/admin/sorties/index','SortiesController@index')->name('admin.sorties.index');
Route::get('admin/sorties/create','SortiesController@create')->name('admin.sorties.create');
Route::post('admin/sorties/store','SortiesController@store')->name('admin.sorties.store');
Route::get('admin/sorties/edit/{id}','SortiesController@edit')->name('admin.sorties.edit');
Route::get('admin/sorties/update/{id}','SortiesController@update')->name('admin.sorties.update');
//Jeux
    Route::get('/admin/jeux/index','jeuxController@index')->name('admin.jeux.index');
    Route::post('/admin/jeux/store','jeuxController@store')->name('admin.jeux.store');
    Route::get('/admin/jeux/create','jeuxController@create')->name('admin.jeux.create');
    Route::get('/admin/jeux/edit/{id}','jeuxController@edit')->name('admin.jeux.edit');
    Route::get('/admin/jeux/update/{id}','jeuxController@edit')->name('admin.jeux.update');
//Divers

    Route::get('/admin/divers/index','DiversController@index')->name('admin.divers.index');
    Route::get('/admin/divers/create','DiversController@create')->name('admin.divers.create');
    Route::post('/admin/divers/store','DiversController@store')->name('admin.divers.store');
    Route::get('/admin/divers/edit/{id}','DiversController@edit')->name('admin.divers.edit');
    Route::get('/admin/divers/update','DiversController@update')->name('admin.divers.update');
//setting

    Route::get('admin/setting/index','SettingController@index')->name('admin.setting.index');
    Route::get('admin/setting/update','SettingController@update')->name('admin.setting.update');
//


});



