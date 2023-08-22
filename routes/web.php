<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostLoginUserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'admin'])->name('admin');
    // Вход
    Route::prefix('login')->group(function () {
        Route::get('/code', [HomeController::class, 'send_code'])->name('admin.send_code');
        Route::get('/{phone}', [HomeController::class, 'login'])->name('admin.login');
        // Запросы
        Route::post('query/code', [PostLoginUserController::class, 'send_code'])->name('admin.send_code');
        Route::post('query/auth', [PostLoginUserController::class, 'auth'])->name('admin.auth');
    });
});