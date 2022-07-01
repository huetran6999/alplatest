<?php

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

Route::get('/login', [App\Http\Controllers\LoginController::class, 'GetLogin'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'PostLogin'])->name('postlogin');

Route::get('user-list', [App\Http\Controllers\UserController::class, 'ShowUser'])->name('userlist');

Route::get('create', [App\Http\Controllers\UserController::class, 'create'])->name('create_user');
Route::post('create', [App\Http\Controllers\UserController::class, 'store'])->name('store');

Route::get('/delete-user/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('delete');
