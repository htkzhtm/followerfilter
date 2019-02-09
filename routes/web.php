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
    return view('home');
});

Route::get('/overview', 'IntroductionController@overview')->name('overview');
Route::get('/detail', 'IntroductionController@detail')->name('detail');


Route::get('/twittersample', 'TwitterController@index');

Route::get('auth/twitter', 'Auth\TwitterController@login');
Route::get('auth/twitter/callback', 'Auth\TwitterController@auth');
Route::get('auth/twitter/logout', 'Auth\TwitterController@logout');
