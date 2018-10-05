<?php

Route::group(['module' => 'User', 'middleware' => ['web'], 'namespace' => 'App\Modules\User\Controllers'], function() {

    Route::resource('User', 'UserController');
    Route::post('api/addUser', 'UserController@addUser');
    

});
