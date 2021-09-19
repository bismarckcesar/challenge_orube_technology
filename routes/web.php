<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DoctorController;
use Illuminate\Http\Request;

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
    return redirect('/login');
});

Route::get('/register', function () {
    return redirect('/register');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/doctor', function () {
    return view('doctor');
})->middleware(['auth'])->name('doctor');

Route::get('/patient', function () {
    return view('patient');
})->middleware(['auth'])->name('patient');

Route::post('/patient/create', [PatientController::Class, 'store'])->middleware(['auth'])->name('create_patient');

Route::post('/doctor/create', [DoctorController::Class, 'store'])->middleware(['auth'])->name('create_doctor');

Route::post('/attendance/create', [AttendanceController::Class, 'store'])->middleware(['auth'])->name('create_attendance');

Route::get('/doctor/edit/{doctor}', [DoctorController::Class, 'edit'])->middleware(['auth'])->name('edit_doctor');

Route::get('/attendance/edit/{attendance}', [AttendanceController::Class, 'edit'])->middleware(['auth'])->name('edit_attendance');

Route::get('/patient/edit/{patient}', [PatientController::Class, 'edit'])->middleware(['auth'])->name('edit_patient');

Route::post('/doctor/update/{doctor}', [DoctorController::Class, 'update'])->middleware(['auth'])->name('update_doctor');

Route::post('/attendance/update/{attendance}', [AttendanceController::Class, 'update'])->middleware(['auth'])->name('update_attendance');

Route::post('/patient/update/{patient}', [PatientController::Class, 'update'])->middleware(['auth'])->name('update_patient');

Route::get('/doctor/delete/{doctor}', [DoctorController::Class, 'destroy'])->middleware(['auth'])->name('delete_doctor');

Route::get('/attendance/delete/{attendance}', [AttendanceController::Class, 'destroy'])->middleware(['auth'])->name('delete_attendance');

Route::get('/patient/delete/{patient}', [PatientController::Class, 'destroy'])->middleware(['auth'])->name('delete_patient');
require __DIR__.'/auth.php';
