<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\LoadController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/loads', LoadController::class);
    Route::resource('/downloads', DownloadController::class);
    Route::post('load', [LoadController::class, 'load'])->name('load');
    // Route::get('printPDF', [LoadController::class, 'printPDF'])->name('printPDF');
});
