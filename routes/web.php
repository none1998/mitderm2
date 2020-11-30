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

Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware('auth');
Route::get('/questions/create', [\App\Http\Controllers\PostController::class, 'create'])->name('questions.create');
Route::post('/questions/save_movie', [\App\Http\Controllers\PostController::class, 'save'])->name('questions.save');
Route::get('/admin', [\App\Http\Controllers\PostController::class, 'admin'])->name('admin')->middleware('auth');;
Route::get('/student', [\App\Http\Controllers\PostController::class, 'student'])->name('student');
Route::get('/users/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/users/post-login', [\App\Http\Controllers\LoginController::class, 'postLogin'])->name('post_login');
Route::post('/users/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

