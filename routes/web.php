<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sider-registration',[
    'uses' => 'SiderController@index'
]);
Route::post('/sider-registration',[
    'uses' => 'SiderController@submit'
]);
Route::get('/success-registration',function() {
    return view('success-registration');
});
