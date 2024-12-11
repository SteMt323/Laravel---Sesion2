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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/pagina1', function () {
    return view('paginas/pagina1');
})->name('pagina1');

Route::get('/pagina2', function () {
    return view('paginas/pagina2');
})->name('pagina2');

Route::get('/pagina3', function () {
    return view('paginas/pagina3');
})->name('pagina3');