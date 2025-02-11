<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;



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
Route::get('patientList',[PatientController::class,'list'])->name('patientList');
// Route::post('delete_patient', [PatientController::class, 'destroy'])->name('delete_patient');

Route::resource('dashboard', DashboardController::class);

//
Route::get('report_add', [ReportController::class, 'index'])->name('report_add');
Route::get('get_patient_details', [ReportController::class,'patient_details'])->name('get_patient_details');
Route::post('add_patient_report', [ReportController::class, 'store'])->name('add_patient_report');

