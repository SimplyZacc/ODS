<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Booking\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Driver\DriverController;
use App\Http\Controllers\User\UserController;

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

Route::resource('user', UserController::class);
Route::resource('driver', DriverController::class);
Route::resource('admin', AdminController::class);


Route::post('booking/payment', 'App\Http\Controllers\Booking\BookingController@payment')->name('booking.payment');
Route::post('booking/inProgress', 'App\Http\Controllers\Booking\BookingController@inProgress')->name('booking.inProgress');
Route::post('booking/refund', 'App\Http\Controllers\Booking\BookingController@refund')->name('booking.refund');
Route::post('booking/complete', 'App\Http\Controllers\Booking\BookingController@complete')->name('booking.complete');
Route::resource('booking', BookingController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
