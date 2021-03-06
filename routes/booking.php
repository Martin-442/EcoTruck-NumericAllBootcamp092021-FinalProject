<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::middleware('isContractor')->middleware("verified")->group(function () {


    Route::get('/dashboard', [BookingController::class, 'index']);
    //Route::get('/add-booking', [BookingController::class, 'create'])->name('add.booking');
    Route::post('/dashboard-contractor', [BookingController::class, 'findAvailableTrucks']);
    Route::put('/dashboard-contractor', [BookingController::class, 'storeAvailableTruck']);
    Route::post('/download/pdf', [BookingController::class, 'createPDF']);

    Route::get('/file-download/{id}', [BookingController::class, 'downloadPdf']);


});
