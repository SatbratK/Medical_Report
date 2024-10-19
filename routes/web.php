<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientDtlController;

// Route for the welcome page
Route::get('/', function () {
    return view('auth.login');
});

// Authentication routes
Auth::routes();

// Route for the home page
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route for the form page
Route::get('/form', [FormController::class, 'index'])->name('form');


Route::post('save_patient_details', [FormController::class, 'store'])->name('save_patient_details');

Route::resource('patientDetails', PatientController::class);

