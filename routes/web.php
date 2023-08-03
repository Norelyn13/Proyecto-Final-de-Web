<?php

use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'index']);

Route::get('/autores', [Controller::class, 'autores']);

Route::get('/libros', [Controller::class, 'libros']);

Route::get('/contacto', [Controller::class, 'contacto']);
