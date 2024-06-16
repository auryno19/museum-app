<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\Localizationcontroller;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/definition', [IndexController::class, 'definition']);
Route::get('/history', [IndexController::class, 'history']);
Route::get('/location', [IndexController::class, 'location']);
Route::get('/tour', [IndexController::class, 'tour']);
Route::get('/schedule', [IndexController::class, 'schedule']);
Route::get('/event', [IndexController::class, 'event']);
Route::get('/event/{id}/{slug}', [IndexController::class, 'event_detail']);
Route::get('/collection', [IndexController::class, 'collection']);
Route::get('/collection/{id}/{slug}', [IndexController::class, 'collection_detail']);
// Route::get('/colin', [IndexController::class, 'colin']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/forgot-password', [LoginController::class, 'forgotPassword']);
    Route::post('/forgot-password', [LoginController::class, 'resetPassword']);
});

Route::middleware('checkRole')->group(function () {
    Route::resource('/admin/event', EventController::class);
    Route::resource('/admin/collection', CollectionController::class);
    Route::get('/admin/event/{id}/editImage', [EventController::class, 'editImage']);
    Route::post('/admin/event/{id}/addImage', [EventController::class, 'addImage']);
    Route::put('/admin/event/{id}/updateImage', [EventController::class, 'updateImage']);
    Route::delete('/admin/event/{id}/deleteImage', [EventController::class, 'deleteImage']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/admin/password', [LoginController::class, 'password']);
    Route::post('/admin/password', [LoginController::class, 'changePassword']);
});


Route::get("locale/{lange}", [Localizationcontroller::class, 'SetLang']);
