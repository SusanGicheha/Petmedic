<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
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



Route::post('/appointments/create',[AppointmentController::class, 'addData']);
