<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

Route::get('/', function () {
    return 'test';
});

Route::get('/sample', [SampleController::class, 'index']);
