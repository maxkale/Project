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

Auth::routes();

Route::get('/', function() {
    return view('auth.login');
});
Route::post('user/auth', 'Auth\LoginController@authenticate');
Route::get('User', 'UserController@index');
Route::get('/home', function () {
    return view('frontend.index');
})->middleware('auth');
