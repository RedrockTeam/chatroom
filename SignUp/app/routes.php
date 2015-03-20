<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', array('as' => 'index', 'uses' => 'App\Controllers\Home\IndexController@index'));

Route::group(array('prefix' => 'home'), function()
{
    Route::any('/', 'App\Controllers\Home\IndexController@index');
    Route::get('index', array('as' => 'home.index.index', 'uses' => 'App\Controllers\Home\IndexController@index'));
    Route::post('index/signUp', array('as' => 'home.index.signUp', 'uses' => 'App\Controllers\Home\IndexController@signUp'));
    Route::get('index/signUp/{openid?}', array('as' => 'home.index.signUp', 'uses' => 'App\Controllers\Home\IndexController@signUp'));
    Route::get('index/detail/{id}', array('as' => 'home.index.detail', 'uses' => 'App\Controllers\Home\IndexController@detail'));
    Route::get('index/success', array('as' => 'home.index.index', 'uses' => 'App\Controllers\Home\IndexController@index'));
});

Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'App\Controllers\Admin\AuthController@getLogout'));
Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'App\Controllers\Admin\AuthController@getLogin'));
Route::post('admin/login', array('as' => 'admin.login.post', 'uses' => 'App\Controllers\Admin\AuthController@postLogin'));

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
    Route::any('/', 'App\Controllers\Admin\LecturesController@index');
    Route::resource('lectures', 'App\Controllers\Admin\LecturesController');
});