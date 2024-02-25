<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::redirect('/', '/posts');

Route::resource('posts', PostController::class)
    ->except('update', 'delete');

Route::get('about', [HomeController::class, 'about'])
    ->name('about');

Route::get('contact', [HomeController::class, 'contact'])
    ->name('contact');

require __DIR__.'/auth.php';
