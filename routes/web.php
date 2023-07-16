<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CausesController;

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

Auth::routes();

// User
// Index
Route::get('/', [HomeController::class, 'index'])->name('index');

// User - Login
Route::get('/homes', [UserController::class, 'redirect'])->name('user');

// Admin
// Events
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events/create/store', [EventController::class, 'store'])->name('events.store');
Route::delete('/events/destroy/{id}', [EventController::class, 'destroy'])->name('events.destroy');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/edit/{id}/update', [EventController::class, 'update'])->name('events.update');

// Causes
Route::get('/causes', [CausesController::class, 'index'])->name('causes');
Route::get('/causes/create', [CausesController::class, 'create'])->name('causes.create');
Route::post('/causes/create/store', [CausesController::class, 'store'])->name('causes.store');
Route::delete('/causes/destroy/{id}', [CausesController::class, 'destroy'])->name('causes.destroy');
Route::get('/causes/edit/{id}', [CausesController::class, 'edit'])->name('causes.edit');
Route::put('/causes/edit/{id}/update', [CausesController::class, 'update'])->name('causes.update');