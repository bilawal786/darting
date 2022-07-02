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
    Route::get('/profile/{id}', 'Front\FrontendController@profile')->name('front.profile');
    Route::get('/activity/{id}', 'Front\FrontendController@activity')->name('front.activity');
    Route::post('/activity', 'Front\FrontendController@activityStore')->name('activity.store');
    Route::get('/activity/apply/part/{id}', 'Front\FrontendController@activityApply')->name('activity.apply.part');
    Route::post('/front/profiles', 'Front\FrontendController@profiles')->name('front.profiles');
    Route::get('/front/profiles', 'Front\FrontendController@profiles')->name('front.profiles');
    Route::get('/activity/create/a', 'Front\FrontendController@activityCreate')->name('activity.create');
    Route::get('/my/profile', 'Front\FrontendController@myProfile')->name('my.profile');
    Route::get('/notification', 'Front\FrontendController@notification')->name('front.notification');

//user
    Route::post('/user/update','Front\UserController@update')->name('user.update');
    Route::post('/prfile/image','Front\UserController@profileImage')->name('prfile.image');
    Route::post('/user/image/post','Front\UserController@imagePost')->name('user.image.post');
});
Route::get('/front/function', 'Front\FrontendController@function')->name('front.function');

Route::group(['middleware' => ['auth', 'role']], function() {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin/sports', 'Admin\SportsController@index')->name('admin.sports');
    Route::get('/admin/sports/edit/{id}', 'Admin\SportsController@edit')->name('admin.sports.edit');
    Route::get('/admin/sports/create', 'Admin\SportsController@create')->name('admin.sports.create');
    Route::post('/admin/sports/store', 'Admin\SportsController@store')->name('admin.sports.store');

    Route::get('/admin/sorties/index','SortiesController@index')->name('admin.sorties.index');
    Route::get('admin/sorties/create','SortiesController@create')->name('admin.sorties.create');
    Route::post('admin/sorties/store','SortiesController@store')->name('admin.sorties.store');
    Route::get('admin/sorties/edit/{id}','SortiesController@edit')->name('admin.sorties.edit');
    Route::get('admin/sorties/update/{id}','SortiesController@update')->name('admin.sorties.update');

    Route::get('/admin/jeux/index','JeuxController@index')->name('admin.jeux.index');
    Route::post('/admin/jeux/store','JeuxController@store')->name('admin.jeux.store');
    Route::get('/admin/jeux/create','JeuxController@create')->name('admin.jeux.create');
    Route::get('/admin/jeux/edit/{id}','JeuxController@edit')->name('admin.jeux.edit');
    Route::get('/admin/jeux/update/{id}','JeuxController@edit')->name('admin.jeux.update');

    Route::get('/admin/divers/index','DiversController@index')->name('admin.divers.index');
    Route::get('/admin/divers/create','DiversController@create')->name('admin.divers.create');
    Route::post('/admin/divers/store','DiversController@store')->name('admin.divers.store');
    Route::get('/admin/divers/edit/{id}','DiversController@edit')->name('admin.divers.edit');
    Route::get('/admin/divers/update','DiversController@update')->name('admin.divers.update');

    Route::get('admin/setting/index','SettingController@index')->name('admin.setting.index');
    Route::post('admin/setting/update','SettingController@update')->name('admin.setting.update');

Route::get('admin/features/index','FeatureController@index')->name('admin.feature.index');

});



