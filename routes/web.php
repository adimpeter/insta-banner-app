<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AdminController;


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

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');


Route::middleware('auth')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.home');
});

Route::post('/upload', [ImageController::class, 'upload'])->name('upload.image');
Route::post('/generate-banner', [ImageController::class, 'generateBanner']);
Auth::routes();

