<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;

// https://httpstatuses.com

// https://httpstatuses.com/401
Route::get('/status/401', [StatusController::class, 'status401'])->name('401');
