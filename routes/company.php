<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::middleware('isContractor')->group(function () {
    
    Route::get('/profile', [CompanyController::class, 'index'])->name('company.profile');
    Route::get('/profile/update', [CompanyController::class, 'create'])->name('profile.update');
    Route::post('/profile/update', [CompanyController::class, 'update']);

    
  
});