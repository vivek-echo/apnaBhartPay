<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\Home\HomePageController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/otp', function () {
//     return view('Auth.Otp');
// });

Route::get('/getState', [App\Http\Controllers\CommonController::class, 'getState']);

Route::get('/dashboard', [App\Http\Controllers\InnerPannel\DashboardController::class, 'index'])->middleware('auth');

Route::match(['GET', 'POST'],'/createAccount', [App\Http\Controllers\Auth\OtpController::class, 'index']);
Route::match(['GET', 'POST'],'/validateOtp', [App\Http\Controllers\Auth\OtpController::class, 'validateOtp']);