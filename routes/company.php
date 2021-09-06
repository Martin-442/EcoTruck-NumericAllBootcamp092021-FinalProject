<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::middleware('isContractor')->group(function () {
    
    Route::get('/profile', [CompanyController::class, 'index'])->name('company.profile');
    Route::get('/update', [CompanyController::class, 'create'])->name('profile.update');
    Route::post('/update', [CompanyController::class, 'update']);

    
  
});