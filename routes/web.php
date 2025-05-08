<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserEventController;
use App\Http\Controllers\UserCausesController;
use App\Http\Controllers\UserProfileController;

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
Route::get('/events/view/{id}', [EventController::class, 'show'])->name('events.show');
Route::put('/events/view/{id}/update', [EventController::class, 'upStatus'])->name('events.upStatus');
Route::get('/events/view/download-pdf/{filename}', [EventController::class, 'downloadPdf'])->name('download.pdf');
Route::delete('/events/view/destroy/{id}', [EventController::class, 'destroy2'])->name('events.destroy2');

// Causes
Route::get('/causes', [CausesController::class, 'index'])->name('causes');
Route::get('/causes/create', [CausesController::class, 'create'])->name('causes.create');
Route::post('/causes/create/store', [CausesController::class, 'store'])->name('causes.store');
Route::delete('/causes/destroy/{id}', [CausesController::class, 'destroy'])->name('causes.destroy');
Route::get('/causes/edit/{id}', [CausesController::class, 'edit'])->name('causes.edit');
Route::put('/causes/edit/{id}/update', [CausesController::class, 'update'])->name('causes.update');
Route::get('/causes/view/{id}', [CausesController::class, 'show'])->name('causes.show');

// Galleries
Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries');
Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
Route::post('/galleries/create/store', [GalleryController::class, 'store'])->name('galleries.store');
Route::delete('/galleries/destroy/{id}', [GalleryController::class, 'destroy'])->name('galleries.destroy');

// Guest
// Events
Route::get('/view_events', [UserEventController::class, 'index'])->name('view_e');
Route::get('/view_eventDetail/{id}', [UserEventController::class, 'show'])->name('view.eventDetail');
Route::get('/view_eventDetail/{id}/register', [UserEventController::class, 'reg'])->name('eventDetail.reg');
Route::post('/view_eventDetail/{id}/store', [UserEventController::class, 'store'])->name('eventDetail.store');

// Causes
Route::get('view_causes', [UserCausesController::class, 'index'])->name('view_c');
Route::get('/view_causesDetail/{id}', [UserCausesController::class, 'show'])->name('view.causesDetail');
Route::post('/view_causesDetail/{id}/store', [UserCausesController::class, 'store'])->name('causesDetail.store');

// About
Route::get('/about_us', [HomeController::class, 'aboutus'])->name('about');

// Profile
Route::get('/profile/history', [UserProfileController::class, 'index'])->name('history');
Route::get('/profile/status', [UserProfileController::class, 'index2'])->name('status');