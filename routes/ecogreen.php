<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcogreenController;

Route::get('/ecogreen', [EcogreenController::class, 'showEcogreen'])->name('ecogreen');


