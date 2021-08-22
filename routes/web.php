<?php

use App\Http\Controllers\DistanceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// http://127.0.0.1:8000/tmp/locations
Route::get('/tmp/locations', [DistanceController::class, 'getAllLocations'])->name('location.getalllocations');

// http://127.0.0.1:8000/tmp/locations/single
Route::get('/tmp/locations/single', [DistanceController::class, 'getAllLocationsSingle'])->name('location.getalllocationssingle');
