<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiControlador;
use App\Models\Contacto;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;


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
    return view('welcome');
});

// vista desde los controadores

Route::get('/mi-ruta', [MiControlador::class, 'mostrarVista'])->name('home');
Route::post('/clientes', [ClienteController::class, 'store']);
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// vista de información de la pagina

Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/portfolio-details', 'portfolio-details')->name('portfolio-details');
Route::view('/contact', 'contact')->name('contact');
//Route::view('/testimonio', 'testimonio')->name('testimonio');
