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

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [HomeController::class, 'Dashboard'])->name('dashboard');
    // Device List
    Route::get('/device_list', [DeviceController::class, 'device_list'])->name('device_list');
    Route::get('/create_device_list', [DeviceController::class, 'create_device_list'])->name('create_device_list');
    Route::post('/device_list_store', [DeviceController::class, 'store_device'])->name('device_list_store');
    Route::get('/edit_device/{id}', [DeviceController::class, 'edit_device'])->name('edit_device');
    Route::put('/update_device/{id}', [DeviceController::class, 'update_device'])->name('update_device');

    // Device report
    Route::get('/device_report', [DeviceController::class, 'device_report'])->name('device_report');

    Route::get('/setting', [DeviceController::class, 'Setting'])->name('setting');
});
