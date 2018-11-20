<?php

Route::group(['module' => 'Profile', 'middleware' => ['web'], 'namespace' => 'App\Modules\Profile\Controllers'], function() {

    Route::resource('Profile', 'ProfileController');

});
