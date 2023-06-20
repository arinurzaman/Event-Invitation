<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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


// Register Guest
Route::get('/register', function () {
    return view('welcome');
});

// Clients Register
Route::get('/client', function () {
    return view('client');
});


Route::post('/registerclient', [ClientsController::class, 'store'])->name('registerclient');
Route::post('/register', [AttendanceController::class, 'store'])->name('register');
Route::get('/getqrcode', function () {
    return view('getqrcode');
});

Route::get('/testqr', [AttendanceController::class, 'testqr']);


// Authenticate
Route::get('/admin', [LoginController::class, 'index'])->name('admin');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {

    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/registrants-before-events', [AttendanceController::class, 'before'])->name('before');
    Route::get('/registrants-at-venue', [AttendanceController::class, 'atvenue'])->name('atvenue');
    
    Route::get('/clients', [ClientsController::class, 'show']);

    // Export Excel
    Route::get('/registrants-export', [AttendanceController::class, 'exportRegistrants']);
    Route::get('/attendance-export', [AttendanceController::class, 'exportAttendance']);
    Route::get('/clients-export', [ClientsController::class, 'exportClient']);

    // Attendance Page
    Route::get('/attending', [AttendanceController::class, 'index']);
    Route::post('/attending', [AttendanceController::class, 'attendance'])->name('attending');
    
});
