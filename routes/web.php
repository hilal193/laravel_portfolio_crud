<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\WorksController;

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

// WORKS - mes projets
// create
Route::get('/admin/works/create', [WorksController::class,"create"])->name('works.create');

// store
Route::post('/admin/works/store', [WorksController::class,"store"])->name('works.store');

// affichage
Route::get('/admin/works/index', [WorksController::class,"index"])->name('works.index');

// Delete
Route::delete('/works/{id}/deleteworks', [WorksController::class,"destroy"])->name("works.destroy");




