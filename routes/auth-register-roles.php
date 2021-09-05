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

// Register Provider
Route::get('/register/provider1', [RegisterProviderController::class, 'createProvider1'])
                ->middleware('guest')
                ->name('register.provider-step1');
Route::post('/register/provider1', [RegisterProviderController::class, 'storeProvider1'])
                ->middleware('guest');

Route::get('/register/provider2', [RegisterProviderController::class, 'createProvider2'])
                ->middleware('guest')
                ->name('register.provider-step2');
Route::post('/register/provider2', [RegisterProviderController::class, 'storeProvider2'])
                ->middleware('guest');

Route::get('/register/provider3', [RegisterProviderController::class, 'createProvider3'])
                ->middleware('guest')
                ->name('register.provider-step3');
Route::post('/register/provider3', [RegisterProviderController::class, 'storeProvider3'])
                ->middleware('guest');

Route::get('/register/provider', [RegisterProviderController::class, 'createProviderFinal'])
                ->middleware('guest')
                ->name('register.provider-final');


// Register Contractor
Route::get('/register/contractor1', [RegisterContractorController::class, 'createContractor1'])
                ->middleware('guest')
                ->name('register.contractor-step1');
Route::post('/register/contractor1', [RegisterContractorController::class, 'storeContractor1'])
                ->middleware('guest');

Route::get('/register/contractor2', [RegisterContractorController::class, 'createContractor2'])
                ->middleware('guest')
                ->name('register.contractor-step2');
Route::post('/register/contractor2', [RegisterContractorController::class, 'storeContractor2'])
                ->middleware('guest');

Route::get('/register/contractor3', [RegisterContractorController::class, 'createContractor3'])
                ->middleware('guest')
                ->name('register.contractor-step3');
Route::post('/register/contractor3', [RegisterContractorController::class, 'storeContractor3'])
                ->middleware('guest');

Route::get('/register/contractor', [RegisterContractorController::class, 'createContractorFinal'])
                ->middleware('guest')
                ->name('register.contractor-final');
