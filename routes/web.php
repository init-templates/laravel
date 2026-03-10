<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return json_encode([
        'code' => 200,
        'message' => 'Hello Laravel'
    ]);
});
