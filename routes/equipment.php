<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\EquipmentController;

Route::middleware('isProvider')->group(function () {

    // http://127.0.0.1:8000/dashboard/provider
    Route::get('/dashboard/provider', [ProviderController::class, 'index'])->name('dashboard_provider');

    // Show the Form to Register Equipment
    // http://127.0.0.1:8000/equipment-new
    Route::get('equipment-new', [EquipmentController::class, 'create'])->name('equipment.equipment-new');
    Route::post('equipment-new', [EquipmentController::class, 'store']);


    // Show the form to update a  equipment
    Route::get('/update/equipment/{id}', [EquipmentController::class, 'edit'])->name('update.equipment');
    Route::post('/update/equipment/{id}', [EquipmentController::class, 'update']);
    // Show the form to delete a  equipment
    Route::get('/delete/equipment/{id}', [EquipmentController::class, 'destroy'])->name('delete.equipment');

});
