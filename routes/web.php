<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;

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
    return view('index');
});



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::resource('/posts', PostController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/contacts', ContactController::class);

    // Route to display form for editing settings
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');

    Route::get('/setting/edit', [SettingController::class, 'edit'])->name('setting.edit');

    // Route to update settings
    Route::put('/setting/update', [SettingController::class, 'update'])->name('setting.update');
});

Route::post('/', [ContactController::class, 'store'])->name('index');
Route::get('/{id}', [Controller::class, 'blogShow'])->name('show');
