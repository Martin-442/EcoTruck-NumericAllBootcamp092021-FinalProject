<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::middleware('isContractor')->group(function () {
    
    Route::get('/dashboard-contractor', [BookingController::class, 'index']);
    Route::get('/add-booking', [BookingController::class, 'create'])->name('add.booking');
    Route::post('/add-booking', [BookingController::class, 'findAvailableTrucks']);
    Route::put('/add-booking', [BookingController::class, 'storeAvailableTruck']);
    Route::post('/download/pdf', [BookingController::class, 'createPDF']);
    
});
