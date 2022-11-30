<?php

use App\Http\Controllers\Auth as Auth;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
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

Route::middleware('guest')->group(function () {
    Route::get('/', [Auth\LoginController::class, 'index'])->name('auth.login');
    Route::post('/auth/login', [Auth\LoginController::class, 'login'])->name('auth.login.login');

    Route::get('/registration', [Auth\RegistrationController::class, 'index'])->name('auth.registration');
    Route::post('/registration/register', [Auth\RegistrationController::class, 'register'])
        ->name('auth.registration.register');
});
Route::get('/test', function () {
    dd(\App\Models\User::all());
});
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::post('/event/create', [EventController::class, 'create'])->name('event.create');
    Route::get('/event/delete', [EventController::class, 'delete'])->name('event.delete');
    Route::get('/event/{event}/modal_info', [EventController::class, 'getModal'])->name('event.getModal');


});
