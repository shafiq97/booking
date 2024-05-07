<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CleaningController;
use App\Http\Controllers\PlumbingController;
use App\Http\Controllers\GardeningController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\BookingController;
// use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/login', function () {
    // return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::group(['middleware'=>'auth'],function(){    
    Route::get('/cleaning', [CleaningController::class,'index'])->name('cleaning.index');
});


Route::get('/services', [ServicesController::class,'view'])->name('services');

Route::get('/plumbing', [PlumbingController::class,'index'])->name('plumbing.index');

Route::get('/gardening', [GardeningController::class,'index'])->name('gardening.index');

Route::get('/serviceprovider', [ServiceProviderController::class,'index'])->name('serviceprovider.index');

Route::get('/booking', [BookingController::class,'index'])->name('booking.index');
Route::get('/booking/show', [BookingController::class,'show'])->name('booking.show');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store')->middleware('auth');


Route::get('/admin', [AdminController::class,'index'])->name('admin.index');

Route::get('/workerprofile', [AdminController::class,'create'])->name('admin.worker');
Route::get('/workerprofile/edit', [AdminController::class,'edit'])->name('admin.edit');


