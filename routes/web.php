<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
Route::get('/' , [AdminController::class , 'index'])->name('admin.index');
});


Route::prefix('user')->middleware(['auth', 'user'])->group(function () {
Route::get('/' , [UserController::class , 'index'])->name('user.index');
Route::get('/about' , [UserController::class , 'about'])->name('user.about');
Route::get('/contact' , [UserController::class , 'contact'])->name('user.contact');
});

Auth::routes();

