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

// http://127.0.0.1:8000/tmp/locations/id
Route::get('/tmp/locations/id', [DistanceController::class, 'getAllLocationIds'])->name('location.getalllocationIds');

// http://127.0.0.1:8000/tmp/makefile/1
Route::get('/tmp/makefile/{id}', [DistanceController::class, 'createFilesLoaclly'])->name('location.createfileslocally');

// http://127.0.0.1:8000/tmp/makefilebatch/985
Route::get('/tmp/makefilebatch/{id}', [DistanceController::class, 'createFileLoacllyBatch'])->name('location.createfilebatch');

// http://127.0.0.1:8000/tmp/stopstojson/1
Route::get('/tmp/stopstojson/{id}', [DistanceController::class, 'addJsonToStop'])->name('location.createfilebatch');

// http://127.0.0.1:8000/tmp/readlength/1:2
Route::get('/tmp/readlength/{from}:{to}', [DistanceController::class, 'readFromJson'])->name('location.createfilebatch');

// http://127.0.0.1:8000/tmp/testlogic/5
Route::get('/tmp/testlogic/{id}', [DistanceController::class, 'testLogic'])->name('location.testlogic');

// END: Temporary path to develop/test services
