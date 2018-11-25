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
    if (Auth::check()) {
        return view('frontend.index');
    } else
        return view('auth.login');
});
Route::post('user/auth', 'Auth\LoginController@authenticate');
Route::post('application/forgetPassword', 'Auth\ForgotPasswordController@forgetPassword');
Route::get('User', 'UserController@index');
Route::get('logout', function() {
    Auth::logout();
    return redirect('/');
})->middleware('auth');
Route::get('getCurrentUser', 'Controller@getCurrentUser');
Route::get('getCountry', 'Controller@getCountry');
Route::post('getState', 'Controller@getState');
Route::post('getCity', 'Controller@getCity');

