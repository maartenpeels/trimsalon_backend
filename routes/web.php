<?php

Route::get('login', function () {
    return view('login');
});

Auth::routes();