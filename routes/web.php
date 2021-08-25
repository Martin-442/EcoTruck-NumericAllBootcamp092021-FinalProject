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

Steps to Migrate on your local system
1. launch Terminal in VSCode
2. Create "verdor" folder and dependencies
        composer install
3. make sure ".env" has correct settings to connect DB
4. create database in phpmyadmin, if needed
5. generate Laravel key:
        php artisan key:generate
6. deploy DB data:
        php artisan migrate:fresh --seed
7. launch Laravel project:
        php artesan serve


*/

Route::get('/', function () {
    return view('welcome');
});


// START: Temporary path to develop/test services
// http://127.0.0.1:8000/tmp/locations
Route::get('/tmp/locations', [DistanceController::class, 'getAllLocations'])->name('location.getalllocations');

// http://127.0.0.1:8000/tmp/locations/single
Route::get('/tmp/locations/single', [DistanceController::class, 'getAllLocationsSingle'])->name('location.getalllocationssingle');

Route::get('/tmp/locations/id', [DistanceController::class, 'getAllLocationIds'])->name('location.getalllocationIds');

// END: Temporary path to develop/test services
