<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

call_user_func(function() {
    
    $host = call_user_func(function() {
        $e = explode('.', Request::root());
        $n = count($e);
        return $e[$n - 2].'.'.$e[$n - 1];
    });
    
    Route::group(['domain' => 'www.'.$host], function()
    {
        Route::get('/', 'WelcomeController@index');
    });

    Route::group(['domain' => 'manage.'.$host], function()
    {
        Route::get('/', 'HomeController@index');
        Route::get('/home', 'HomeController@index');
        Route::controllers([
            'auth' => 'Auth\AuthController',
            'password' => 'Auth\PasswordController',
            'account' => 'AccountController',
        ]);
    });
});

