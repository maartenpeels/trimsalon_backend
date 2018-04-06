<?php

Route::group(['prefix' => 'v1'], function () {
    Route::post('login', 'UserController@attemptLogin');

    Route::group(['middleware' => ['auth:api', 'throttle:60,1']], function () {

        //Login protected routes

    });
});