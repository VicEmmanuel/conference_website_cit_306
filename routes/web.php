<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AttendeeController::class, 'index']);
Route::get('/register', [AttendeeController::class, 'registerView']);
Route::post('/store', [AttendeeController::class, 'store'])->name('store-data');
Route::get('/list', [AttendeeController::class, 'list']);
Route::post('/store-contact', [ContactController::class, 'store']);
