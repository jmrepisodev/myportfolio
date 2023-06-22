<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\MessageController;

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

Route::get('/', [PortafolioController::class, 'index'])->name('/');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('proyectos', ProyectoController::class)->middleware("adminAuth");

Route::post('/contact', [MessageController::class, 'store'])->name('contact');