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
    return view('page.home');
});

Route::get('/live', function () {
    return view('page.live');
});

Route::get('/news', function () {
    return view('page.news');
});

Route::get('/vicrow', function () {
    return view('page.vicrow');
});

Route::get('/tded', function () {
    return view('page.tded');
});

Route::get('/tdedstep', function () {
    return view('page.tdedstep');
});

Route::resource('/api/{cid}/','ApiController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/', 'HomeController@index');
    });
});
