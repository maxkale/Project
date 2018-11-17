<?php

Route::group(['module' => 'Dashboard', 'middleware' => ['web'], 'namespace' => 'App\Modules\Dashboard\Controllers'], function() {

    Route::get('/dashboard', function() {
        return view('Dashboard::index');
    });
});
