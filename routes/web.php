<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
})->middleware('no_cache');

require __DIR__.'/auth.php';
