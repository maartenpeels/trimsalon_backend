<?php

Route::any('{any}', function () {
    return response()->json([
        "name"    => "Trimsalon API",
        "version" => "1.0",
        "status"  => "up"
    ]);
})->where('any', '.*');