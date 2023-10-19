<?php

use App\Http\Controllers\AuthRegisterController;
use App\Http\Controllers\AuthLoginController;;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\LogoutController;

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


Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('/compras', [BuyController::class, 'index'])->name('buy.index');

Route::get('/register', [AuthRegisterController::class, 'index'])->name('register.index');
Route::post('/register', [AuthRegisterController::class,'store'])->name('register.store');

Route::get('/login', [AuthLoginController::class,'index'])->name("login.index");
Route::post("/login", [AuthLoginController::class, 'auth'])->name("login.auth");

Route::get("/logout", [LogoutController::class, "logout"])->name('logout');