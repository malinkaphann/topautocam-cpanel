<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MotorbikeController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\GlobalSearchController;

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

Route::middleware('locale')->group(function () {

    Route::get('/', [SiteController::class, 'index'])->name('home');
    
    Route::get('/cars', [CarController::class, 'index'])->name('car-index');
    Route::get('/cars/{id}', [CarController::class, 'detail'])->name('car-detail');

    Route::get('/motorbikes', [MotorbikeController::class, 'index'])->name('motorbike-index');
    Route::get('/motorbikes/{id}', [MotorbikeController::class, 'detail'])->name('motorbike-detail');

    Route::get('/parts', [PartController::class, 'index'])->name('part-index');
    Route::get('/parts/{id}', [PartController::class, 'detail'])->name('part-detail');

    Route::get('/loan', [SiteController::class, 'loan'])->name('loan-index');
    Route::get('/login', [SiteController::class, 'login'])->name('login');
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::post('/locale', [SiteController::class, 'locale'])->name('set-locale');
    //----
    Route::get('/about-us', [SiteController::class, 'aboutUs'])->name('about-us');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/post/{slug}', [BlogController::class, 'detail'])->name('post');

    Route::get('/search',[GlobalSearchController::class, 'globalSearch']);
    // ->name('global-search');

});
