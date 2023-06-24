<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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
 
Route::get('/', function () {
    return redirect()->to("/login");
});

    Route::middleware('auth')->group(function () 
    {
        Route::prefix('_admin')->group(function () {
            Route::resource('home', Admin\HomeController::class);
        });
        Route::prefix('_employee')->group(function () {
            Route::resource('home', Admin\HomeController::class);
        });
            
    });

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('login', [ App\Http\Controllers\AuthController::class, 'Postlogin']);
Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');