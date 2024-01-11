<?php

use App\Http\Controllers\DataFormController;
use App\Http\Controllers\PageController;
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
// Page Route
Route::get('/', [PageController::class,'indexPage'])->name('index.page');
Route::get('/input', [PageController::class,'inputPage'])->name('input.page');
Route::get('/output', [DataFormController::class,'index'])->name('output.page');

// Data Route
Route::post('/data', [DataFormController::class, 'store'])->name('data.create');
