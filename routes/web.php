<?php

use App\Http\Controllers\CollectorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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
    return redirect('/login');
});
Route::get('/login', [LoginController::class,'index']);

Route::get('/dashboard', function () {
    return view('layouts.dashboard.index',['title'=>'Dashboard']) ;
});
Route::get('/tagihan',[CollectorController::class,'index'])->name('tagihan');
Route::resource('user', UserController::class);