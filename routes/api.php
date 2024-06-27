<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DeviceController;
use App\Http\Controllers\API\PlateRecognizerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/health/status', [DeviceController::class, 'Health'])->name('device_report');
Route::post('/vids/data', [DeviceController::class, 'VidsData'])->name('vids_data');
Route::post('/upload-image', [PlateRecognizerController::class, 'uploadImageToPlateRecognizer'])->name('upload-image');
