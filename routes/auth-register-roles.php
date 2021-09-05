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
$step = 1;
Route::get('/register/provider'.$step, [RegisterProviderController::class, 'createProvider'.$step])
                ->middleware('guest')
                ->name('register.provider-step'.$step);
Route::post('/register/provider'.$step, [RegisterProviderController::class, 'storeProvider'.$step])
                ->middleware('guest');

$step = 2;
Route::get('/register/provider'.$step, [RegisterProviderController::class, 'createProvider'.$step])
                ->middleware('guest')
                ->name('register.provider-step'.$step);
Route::post('/register/provider'.$step, [RegisterProviderController::class, 'storeProvider'.$step])
                ->middleware('guest');

$step = 3;
Route::get('/register/provider'.$step, [RegisterProviderController::class, 'createProvider'.$step])
                ->middleware('guest')
                ->name('register.provider-step'.$step);
Route::post('/register/provider'.$step, [RegisterProviderController::class, 'storeProvider'.$step])
                ->middleware('guest');

$step = 4;
Route::get('/register/provider'.$step, [RegisterProviderController::class, 'createProvider'.$step])
                ->middleware('guest')
                ->name('register.provider-step'.$step);
Route::post('/register/provider'.$step, [RegisterProviderController::class, 'storeProvider'.$step])
                ->middleware('guest');

$step = 'final';
Route::get('/register/provider', [RegisterProviderController::class, 'createProviderFinal'])
                ->middleware('guest')
                ->name('register.provider-final');


// Register Contractor
$step = 1;
Route::get('/register/contractor'.$step, [RegisterContractorController::class, 'createContractor'.$step])
                ->middleware('guest')
                ->name('register.contractor-step'.$step);
Route::post('/register/contractor'.$step, [RegisterContractorController::class, 'storeContractor'.$step])
                ->middleware('guest');

$step = 2;
Route::get('/register/contractor'.$step, [RegisterContractorController::class, 'createContractor'.$step])
                ->middleware('guest')
                ->name('register.contractor-step'.$step);
Route::post('/register/contractor'.$step, [RegisterContractorController::class, 'storeContractor'.$step])
                ->middleware('guest');

$step = 3;
Route::get('/register/contractor'.$step, [RegisterContractorController::class, 'createContractor'.$step])
                ->middleware('guest')
                ->name('register.contractor-step'.$step);
Route::post('/register/contractor'.$step, [RegisterContractorController::class, 'storeContractor'.$step])
                ->middleware('guest');

$step = 4;
Route::get('/register/contractor'.$step, [RegisterContractorController::class, 'createContractor'.$step])
                ->middleware('guest')
                ->name('register.contractor-step'.$step);
Route::post('/register/contractor'.$step, [RegisterContractorController::class, 'storeContractor'.$step])
                ->middleware('guest');

$step = 'final';
Route::get('/register/contractor', [RegisterContractorController::class, 'createContractorFinal'])
                ->middleware('guest')
                ->name('register.contractor-final');
