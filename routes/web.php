<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ContractorController;

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
    return view('/home');
});

Route::middleware('isAdmin')->middleware('verified')->group(function () {
    // http://127.0.0.1:8000/dashboard/admin
    Route::get('dashboard/admin', [AdminController::class, 'index'])->name('dashboard_admin');
});

Route::middleware('isProvider')->middleware('verified')->group(function () {
    // http://127.0.0.1:8000/dashboard/provider
    Route::get('/dashboard/provider', [ProviderController::class, 'index'])->name('dashboard_provider');

    // Show the form to create equipment
    Route::get('/equipment-new', [TruckController::class, 'create']);
    Route::post('/equipment-show', [TruckController::class, 'store']);
});

Route::middleware('isContractor')->middleware('verified')->group(function () {
    // http://127.0.0.1:8000/dashboard/contractor
    Route::get('/dashboard/contractor', [ContractorController::class, 'index'])->name('dashboard_contractor');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->middleware('verified')->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/email_verification.php';
require __DIR__.'/status.php';

require __DIR__.'/dropoff_location.php';
