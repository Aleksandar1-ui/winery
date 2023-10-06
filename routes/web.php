<?php

use App\Models\Vino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VinoController;
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
//All listings
Route::get('/', [VinoController::class,'index']);
//Show Create Form
Route::get('/vina/kreiraj',[VinoController::class,'create'])->middleware('auth');
//Store Wine
Route::post('/vina',[VinoController::class,'store'])->middleware('auth');
//Show Edit Form
Route::get('vina/{vino}/izmeni',[VinoController::class,'edit'])->middleware('auth');
//Update
Route::put('vina/{vino}',[VinoController::class,'update'])->middleware('auth');
//Delete
Route::delete('vina/{vino}',[VinoController::class,'destroy'])->middleware('auth');
//Upravuvaj
Route::get('/vina/manage',[VinoController::class,'manage'])->middleware('auth');
//Single listing
Route::get('/vina/{vino}', [VinoController::class,'show']);
//Show register/create form
Route::get('/register',[UserController::class,'create'])->middleware('guest');
//Create new user
Route::post('/users',[UserController::class,'store']);
//Odjava
Route::post('/odjava',[UserController::class,'logout'])->middleware('auth');
//Login
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
//Najavi korisnik
Route::post('/users/authenticate',[UserController::class,'authenticate']);