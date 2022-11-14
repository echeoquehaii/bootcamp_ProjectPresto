<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnounceController;

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

Route::get('/', [PublicController::class, "welcome"])->name('welcome');

//Rotte login e register
Route::get('/register', [PublicController::class, "register"])->name('register');
Route::get('/login', [PublicController::class, "login"])->name('login');

//Rotte annunci
Route::get('/nuovo/createAnnounce', [AnnounceController::class, "createAnnounce"])->middleware('auth')->name('createAnnounce');
Route::get('/announce', [AnnounceController::class, "indexAnnounce"])->name('indexAnnounce');
Route::get('/announce/{category}', [AnnounceController::class, "categoryShow"])->name('categoryShow');
Route::get('/announce/dettaglio/{announce}', [AnnounceController::class, "detAnnounce"])->name('detAnnounce');

//Rotte revisore

Route::get('/revisor/home', [RevisorController::class, "indexRevisor"])->middleware('IsRevisor')->name('indexRevisor');
Route::patch('/accept/announce/{announce}', [RevisorController::class, "acceptAnnounce"])->middleware('IsRevisor')->name('revisor.acceptAnnounce');
Route::patch('/reject/announce/{announce}', [RevisorController::class, "rejectAnnounce"])->middleware('IsRevisor')->name('revisor.rejectAnnounce');
Route::get('/request/revisor', [RevisorController::class, "profileRevisor"])->middleware('auth')->name('profileRevisor');
Route::get('/make/revisor/{user}', [RevisorController::class, "makeRevisor"])->name('makeRevisor');

//Rotta per ricerche

Route::get('/search/announces', [AnnounceController::class, 'searchAnnounces'])->name('searchAnnounces');

// Rotta lavora con noi

//Route::get('/', [])->name('workWithUs');




