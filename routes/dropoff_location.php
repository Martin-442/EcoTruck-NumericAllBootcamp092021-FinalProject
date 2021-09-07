<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropoffController;

Route::middleware('isAdmin')->middleware('verified')->group(function () {
    // http://127.0.0.1:8000/dropoff
    Route::get('/dropoff', [DropoffController::class, 'index'])->name('dropoff.index');

    // http://127.0.0.1:8000/dropoff/1
    Route::get('/detail/dropoff/{id}', [DropoffController::class, 'show'])->name('dropoff.detail');

    // Show the form to create new
    // http://127.0.0.1:8000/dropoff/new
    Route::get('/new/dropoff', [DropoffController::class, 'create'])->name('dropoff.new');
    Route::post('/new/dropoff', [DropoffController::class, 'store']);

    // Show the form to update
    // http://127.0.0.1:8000/dropoff/update/1
    Route::get('/update/dropoff/{id}', [DropoffController::class, 'edit'])->name('dropoff.update');
    Route::post('/update/dropoff/{id}', [DropoffController::class, 'update']);

    // http://127.0.0.1:8000/dropoff/delete/1
    Route::get('/delete/dropoff/{id}', [DropoffController::class, 'destroy'])->name('dropoff.delete');

});
