<?php

use App\Http\Controllers\AdmCollectorController;
use App\Http\Controllers\AjaxController;
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
Route::get('/home', function () {
    return redirect('/dashboard');
});
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/register', [LoginController::class,'regist'])->middleware('guest');
Route::post('/register', [LoginController::class,'register']);
Route::post('/logout',[LoginController::class,'logout'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('layouts.dashboard.index',['title'=>'Dashboard']) ;
})->middleware('auth');

<<<<<<< HEAD
Route::get('/tagihan-kolektor',[CollectorController::class,'index'])->name('tagihan')->middleware('auth');
Route::resource('user', UserController::class);
Route::get('/test', function () {
    return view('pages.blank',['title'=>'title']);
});
=======

Route::get('/tagihan-kolektor',[CollectorController::class,'index'])->name('tagihan')->middleware('auth');
Route::resource('user', UserController::class);
// Route::resource('/tagihan-admin', AdmCollectorController::class);
Route::get('/tagihan-admin', [AdmCollectorController::class,'index']);

Route::get('/ajax', [AjaxController::class,'piutangtempo'])->name('piutangtempo');


Route::get('/test', function () {
    return view('pages.blank',['title'=>'title']);
});
>>>>>>> 27514f3bc90aa1d0c3948be239ed96fa47cac3b7
