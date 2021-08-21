<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\VaccinationController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\UserListController;
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

Route::get('/', function () {
    return view('welcome');
});





Route::get('/dashboard',[UserController::class,'show'])->name('dashboard');

Route::resource('appointments',\App\Http\Controllers\AppointmentController::class);

Route::resource('vaccinations',\App\Http\Controllers\VaccinationController::class);
Route::resource('medicalrecords' ,\App\Http\Controllers\MedicalRecordController::class);
Route::resource('users',\App\Http\Controllers\UserListController::class);

Route::get('/medicalrecords/show',[MedicalRecordController::class, 'show'])->name('medicalrecords.show');
Route::get('/medicalrecords/view',[MedicalRecordController::class, 'show'])->name('medicalrecords.view');
Route::get('/vaccinations/show',[VaccinationController::class, 'show'])->name('vaccinations.show');
Route::get('/appointments/show',[AppointmentController::class, 'show'])->name('appointments.show');

Route::get('/booked',[AppointmentController::class, 'booked'])->name('appointments.booked');
Route::post('/medicalrecords/store',[MedicalRecordController::class, 'store'])->name('medicalrecords.store');
Route::post('/appointments/create',[AppointmentController::class, 'addData']);
Route::post('/vaccinations/create',[VaccinationController::class, 'addData']);
Route::post('/users/create',[UserListController::class, 'addData']);
