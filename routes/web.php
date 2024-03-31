<?php

use App\Http\Controllers\GeneralController;
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



Route::get("/", [GeneralController::class, "home"])->name("login");
Route::post('/login', [GeneralController::class, "login"])->name('home.login');
Route::get('/logout', [GeneralController::class, 'logout']);

Route::get("terms", [GeneralController::class, "terms"])->name("terms")->middleware('auth');
Route::get("dashboard", [GeneralController::class, "dashboard"])->name('dashboard')->middleware('auth');
