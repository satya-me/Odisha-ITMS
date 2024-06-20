<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DeviceController;

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

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'Dashboard'])->name('dashboard');

    // Device List
    Route::get('/device_list', [DeviceController::class, 'device_list'])->name('device_list');
    Route::get('/create_device_list', [DeviceController::class, 'create_device_list'])->name('create_device_list');
    Route::post('/device_list_store', [DeviceController::class, 'store_device'])->name('device_list_store');
    // Device report
    Route::get('/device_report', [DeviceController::class, 'device_report'])->name('device_report');

