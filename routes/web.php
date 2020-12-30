<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumQuestionController;
use App\Http\Controllers\ForumReponseController;
use App\Http\Controllers\ExerciceController;

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



Route::get('/home', [HomeController::class,'index'])->name('home');

// Route::get('/admin/roles',[RoleController::class,'index']);

Route::resource('admin',RoleController::class);

Auth::routes();

//Adminitstrateur

Route::resource('/profil-admin', UserController::class);
Route::resource('/classe-admin', ClasseController::class);
Route::resource('/exercice-admin', ExerciceController::class);

Route::post('/exercice/{id}/download', [ExerciceController::class, 'download']);


// Publique 

Route::get('/', [PublicController::class, 'index'])->name('accueil');
Route::get('/classe', [PublicController::class, 'index2'])->name('classe');
Route::get('/eleves', [PublicController::class, 'index21'])->name('eleves');
Route::get('/agenda', [PublicController::class, 'index22'])->name('agenda');
Route::get('/exercice', [PublicController::class, 'index23'])->name('exercice');
Route::resource('/forum', ForumController::class)->middleware('auth');
Route::resource('/forum-question', ForumQuestionController::class)->middleware('auth');
Route::resource('/forum-reponse', ForumReponseController::class)->middleware('auth');


//contact
Route::get('/contact', [PublicController::class, 'index4'])->name('contact');
Route::get('/profil', [PublicController::class, 'index5'])->name('profil');
Route::post("/send-email", [MailController::class, "sendMail"]);

