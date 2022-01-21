<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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
    return view('home');
});

Route::get('/home', [FrontController::class,"index"])->name('home');
Route::get('/about', [FrontController::class,"about"])->name('about');
Route::get('/contact', [FrontController::class,"contact"])->name('contact');
Route::get('/resume', [FrontController::class,"resume"])->name('resume');
Route::get('/services', [FrontController::class,"services"])->name('services');
Route::get('/testimonials', [FrontController::class,"testimonials"])->name('testimonials');
Route::get('/skills', [FrontController::class,"skills"])->name('skills');
Route::get('/works', [FrontController::class,"works"])->name('works');

// admin
Route::get('/admin/dashboard', [FrontController::class,"dashboard"])->name('dashboard');


// store
Route::post('/admin/works/store', [PortfolioController::class,"store"])->name('works.store');


