<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Booking\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Driver\DriverController;

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

Route::resource('driver', DriverController::class);
Route::resource('admin', AdminController::class);
Route::resource('booking', BookingController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
