<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClasseController;

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




Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


Route::resource('/profil-admin', UserController::class);
Route::resource('/classe-admin', ClasseController::class);


// Publique 

Route::get('/', [PublicController::class, 'index'])->name('accueil');
Route::get('/classe', [PublicController::class, 'index2'])->name('classe');



// Route::get('/forum', [PublicController::class, 'index3'])->name('forum');
// Route::get('/contact', [PublicController::class, 'index4'])->name('contact');
