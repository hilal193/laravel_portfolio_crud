<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailboxController;

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


// About
// create
Route::get('/admin/about/create', [AboutController::class,"create"])->name('about.create');
// store
Route::post('/admin/about/store', [AboutController::class,"store"])->name('about.store');
// affichage
Route::get('/admin/about/index', [AboutController::class,"index"])->name('about.index');
// Delete
Route::delete('/about/{id}/deleteabout', [AboutController::class,"destroy"])->name("about.destroy");
// show
Route::get('/about/{about}/showsabout', [AboutController::class,"show"])->name("about.show");
// edit
Route::get('/about/{about}/edit', [AboutController::class,"edit"])->name("about.edit");
// update
Route::put('/about/{about}/update', [AboutController::class,"update"])->name("about.update");


// Contact
// create
Route::get('/admin/contact/create', [ContactController::class,"create"])->name('contact.create');
// store
Route::post('/admin/contact/store', [ContactController::class,"store"])->name('contact.store');
// affichage
Route::get('/admin/contact/index', [ContactController::class,"index"])->name('contact.index');
// Delete
Route::delete('admin/contact/{id}/destroy', [ContactController::class,"destroy"])->name("contact.destroy");
// show
Route::get('/contact/{contact}/showscontact', [ContactController::class,"show"])->name("contact.show");
// edit
Route::get('/contact/{contact}/edit', [ContactController::class,"edit"])->name("contact.edit");
// update
Route::put('/contact/{contact}/update', [ContactController::class,"update"])->name("contact.update");

// mailbox
// Route::resource("admin/mailbox", MailboxController::class);
// create
// Route::get('/admin/mailbox/create', [MailboxController::class,"create"])->name('mailbox.create');
// // store
// Route::post('/admin/mailbox/store', [MailboxController::class,"store"])->name('mailbox.store');
// // affichage
// Route::get('/admin/mailbox/index', [MailboxController::class,"index"])->name('mailbox.index');
// // Delete
// Route::delete('admin/mailbox/{id}/destroy', [MailboxController::class,"destroy"])->name("mailbox.destroy");
// // show
// Route::get('/mailbox/{mailbox}/showscontact', [MailboxController::class,"show"])->name("mailbox.show");
// // edit
// Route::get('/mailbox/{mailbox}/edit', [MailboxController::class,"edit"])->name("mailbox.edit");
// // update
// Route::put('/mailbox/{mailbox}/update', [MailboxController::class,"update"])->name("mailbox.update");


Route::resource('admin/mailbox', MailboxController::class);








