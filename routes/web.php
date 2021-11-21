<?php

use App\Http\Controllers\AdmCollectorController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CollectorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
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
Route::get('/items',[ItemController::class,'index']);
// route::get('/items?search={}',[ItemController::class,'search'])->name('search');

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return redirect('/login');
    });
    Route::get('/home', function () {
        return redirect('/dashboard');
    });
    Route::get('/login', [LoginController::class,'index'])->name('login');
    Route::post('/login', [LoginController::class,'authenticate'])->name('auth.login');
    Route::get('/register', [LoginController::class,'regist']);
    Route::post('/register', [UserController::class,'store']);

});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::post('/logout',[LoginController::class,'logout']);
    Route::get('/tagihan-kolektor',[CollectorController::class,'index'])->name('tagihan');
    // Route::resource('users', UserController::class);
    Route::get('/users',[UserController::class,'index']);
    Route::post('/users',[UserController::class,'update'])->name('user.update');
    Route::get('/tagihan-admin', [AdmCollectorController::class,'index']);
    Route::get('/ajax', [AjaxController::class,'piutangtempo'])->name('piutangtempo');
    Route::get('/ajax/user', [AjaxController::class,'user'])->name('user.json');
});
