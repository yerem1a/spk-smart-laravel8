<?php

use App\Http\Controllers\InputUserController;
use App\Http\Controllers\PenyederhanaanAlternatifController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [PenyederhanaanAlternatifController::class, 'index'])->name('home');
Route::get('/input-user', [InputUserController::class, 'create'])->name('inputuser.create');
Route::post('/input-user', [InputUserController::class, 'store'])->name('inputuser.store');
