<?php

use App\Http\Controllers\Admin\AcountSettings\AddUserController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/admin/adduser', [AddUserController::class, 'index'])->name('admin.adduser');
Route::post('/admin/adduser/store', [AddUserController::class, 'store'])->name('admin.store');
