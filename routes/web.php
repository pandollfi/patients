<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/admin', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/patient', App\Http\Controllers\PatientController::class);
    Route::post('/patient/restore', [App\Http\Controllers\PatientController::class, 'restore'])->name('patient.restore');
});
