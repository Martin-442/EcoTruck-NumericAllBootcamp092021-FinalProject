<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\RegisterProviderController;
use App\Http\Controllers\Auth\RegisterContractorController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->middleware('verified')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    // Register Provider
    Route::get('/register/provider1', [RegisterProviderController::class, 'createProvider1'])->name('register.provider-step1');
    Route::post('/register/provider1', [RegisterProviderController::class, 'storeProvider1']);

    Route::get('/register/provider2', [RegisterProviderController::class, 'createProvider2'])->name('register.provider-step2');
    Route::post('/register/provider2', [RegisterProviderController::class, 'storeProvider2']);

    Route::get('/register/provider3', [RegisterProviderController::class, 'createProvider3'])->name('register.provider-step3');
    Route::post('/register/provider3', [RegisterProviderController::class, 'storeProvider3']);

    Route::get('/register/provider', [RegisterProviderController::class, 'createProviderFinal'])->name('register.provider-final');


    // Register Contractor
    Route::get('/register/contractor1', [RegisterContractorController::class, 'createContractor1'])->name('register.contractor-step1');
    Route::post('/register/contractor1', [RegisterContractorController::class, 'storeContractor1']);

    Route::get('/register/contractor2', [RegisterContractorController::class, 'createContractor2'])->name('register.contractor-step2');
    Route::post('/register/contractor2', [RegisterContractorController::class, 'storeContractor2']);

    Route::get('/register/contractor3', [RegisterContractorController::class, 'createContractor3'])->name('register.contractor-step3');
    Route::post('/register/contractor3', [RegisterContractorController::class, 'storeContractor3']);

    Route::get('/register/contractor', [RegisterContractorController::class, 'createContractorFinal'])->name('register.contractor-final');

});



Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');



Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');
