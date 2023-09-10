<?php

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



Auth::routes();

Route::get('/', function () {
    return redirect()->route('register');
});

Route::get('/home', [App\Http\Controllers\PersonajesController::class, 'index'])->name('home')->middleware('auth');

Route::patch('/update/{id}', [App\Http\Controllers\PersonajesController::class, 'update'])->name('personajes.update')->middleware('auth');

Route::get('/persolc', [App\Http\Controllers\PersonajesController::class, 'persolc'])->name('persolc')->middleware('auth');

Route::get('/subir', [App\Http\Controllers\PersonajesController::class, 'subir'])->name('subir')->middleware('auth');

Route::get('/detalle/{id}', [App\Http\Controllers\PersonajesController::class, 'detalle'])->name('detalle')->middleware('auth');

Route::get('/showperso/{id}', [App\Http\Controllers\PersonajesController::class, 'showperso'])->name('showperso')->middleware('auth');