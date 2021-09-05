<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Auth;

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


// different homepage paths for auth roles handled in Middleware/RedirectIfAuthenticated
// https://medium.com/fabcoding/laravel-redirect-users-according-to-roles-and-protect-routes-bde324fe1823
Route::get('/', [HomepageController::class, 'getHomepage'])->name('homepage');
// Route::view('boostrap-modal','livewire.home');
// Route::view('logout-modal','livewire.homepage');

Route::middleware('isAdmin')->middleware('verified')->group(function () {
    // Sitemap
    Route::get('sitemap', [HomepageController::class, 'getSitemap'])->name('sitemap');
    // debugging routes object
    // http://127.0.0.1:8000/sitemap/debug
    Route::get('/sitemap/{debug}', [HomepageController::class, 'getSitemap'])->name('sitemap');

    // Admin Dashboard
    // http://127.0.0.1:8000/dashboard/admin
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard_admin');
});

Route::middleware('isProvider')->middleware('verified')->group(function () {
    // http://127.0.0.1:8000/dashboard/provider
    Route::get('/dashboard/provider', [ProviderController::class, 'index'])->name('dashboard_provider');

});

Route::middleware('isContractor')->middleware('verified')->group(function () {
    // http://127.0.0.1:8000/dashboard/contractor
    Route::get('/dashboard/contractor', [ContractorController::class, 'index'])->name('dashboard_contractor');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->middleware('verified')->name('dashboard');

require __DIR__.'/auth.php'; // includes auth-register-roles.php
require __DIR__.'/email_verification.php';
require __DIR__.'/status.php';

require __DIR__.'/equipment.php';

require __DIR__.'/dropoff_location.php';
