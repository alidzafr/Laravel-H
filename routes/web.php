<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/search', [EmployeeController::class, 'search'])->name('employee.search');
Route::get('/employee/dashboard', [EmployeeController::class, 'dashboard'])->name('employee.dashboard');
Route::get('/employee/analyze', [EmployeeController::class, 'upload'])->name('employee.analyzer');

Route::get('/', function () {
    return view('welcome');
})->name('index');
