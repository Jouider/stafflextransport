<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LoginController;
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



Route::get('/',[homeController::class,'index'])->name('homepage');
Route::get('servicespage',[homeController::class,'service'])->name('servicespage');
Route::view('about','pages.about')->name('aboutpage');
Route::get('contact',[ContactController::class,'create'])->name('contactpage');
Route::post('contact',[ContactController::class,'store'])->name('contactpage.store');


Route::get('/services/create',[ServiceController::class,'create'])->name('services.create');
Route::post('/services',[ServiceController::class,'store'])->name('services.store');
Route::delete('/services/{service}',[ServiceController::class,'destroy'])->name('service.destroy');
Route::get('/services/{service}/edit',[ServiceController::class,'edit'])->name('service.edit');
Route::put('/services/{service}',[ServiceController::class,'update'])->name('service.update');


Route::get('/teams/create',[TeamController::class,'create'])->name('team.create');
Route::post('/teams',[TeamController::class,'store'])->name('team.store');
Route::delete('/teams/{team}',[TeamController::class,'destroy'])->name('team.destroy');
Route::get('/teams/{team}/edit',[TeamController::class,'edit'])->name('team.edit');
Route::put('/teams/{team}',[TeamController::class,'update'])->name('team.update');

Route::get('/login',[loginController::class,'show'])->name('auth.show');
Route::post('/login',[loginController::class,'login'])->name('auth.login');
Route::get('/logout',[loginController::class,'logout'])->name('auth.logout');