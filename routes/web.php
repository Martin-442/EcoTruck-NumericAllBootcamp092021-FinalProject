<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\BookingController;

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

Route::middleware('isAdmin')->group(function () {
    // http://127.0.0.1:8000/dashboard/admin
    Route::get('dashboard/admin', [AdminController::class, 'index'])->name('dashboard_admin');
});

Route::middleware('isProvider')->group(function () {
    // http://127.0.0.1:8000/dashboard/provider
    Route::get('/dashboard/provider', [ProviderController::class, 'index'])->name('dashboard_provider');

    // Show the form to create equipment
    Route::get('/equipment-new', [TruckController::class, 'create']);
    Route::post('/equipment-show', [TruckController::class, 'store']);
});



Route::get('/dashboard', function () {
    return view('dashboard-contractor');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('isContractor')->group(function () {
    
    Route::get('/dashboard-contractor', [BookingController::class, 'index']);
});

Route::middleware('isContractor')->group(function () {
    
    Route::get('/add-booking', [BookingController::class, 'create'])->name('add.booking');
});

Route::middleware('isContractor')->group(function () {
    
    Route::post('/add-booking', [BookingController::class, 'findAvailableTrucks']);
});