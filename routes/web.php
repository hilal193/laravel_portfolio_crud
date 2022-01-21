<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\SkillsController;

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
// show
Route::get('/works/{works}/showworks', [WorksController::class,"show"])->name("works.show");
// edit
Route::get('/works/{works}/edit', [WorksController::class,"edit"])->name("works.edit");
// update
Route::put('/works/{works}/update', [WorksController::class,"update"])->name("works.update");

// Skills
// create
Route::get('/admin/skills/create', [SkillsController::class,"create"])->name('skills.create');
// store
Route::post('/admin/skills/store', [SkillsController::class,"store"])->name('skills.store');
// affichage
Route::get('/admin/skills/index', [SkillsController::class,"index"])->name('skills.index');
// Delete
Route::delete('/skills/{id}/deleteskills', [SkillsController::class,"destroy"])->name("skills.destroy");
// show
Route::get('/skills/{skills}/showskills', [SkillsController::class,"show"])->name("skills.show");
// edit
Route::get('/skills/{skills}/edit', [SkillsController::class,"edit"])->name("skills.edit");
// update
Route::put('/skills/{skills}/update', [SkillsController::class,"update"])->name("skills.update");







