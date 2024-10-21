<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiControlador;
use App\Models\Contacto;
use App\Models\Archivo;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;
use RealRashid\SweetAlert\Facades\Alert;



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
    //Alert::success('guardado', 'los datos se guardaron correctamente');
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
Route::view('/editar', 'editar')->name('editar');

// vista de información legal de la pagina
Route::view('/terminos', 'legalidad.terminos')->name('legalidad.terminos');
Route::view('/politica', 'legalidad.politica')->name('legalidad.politica');

//rutas del crud
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');


//ruta subir archivo
Route::post('/subir',[AdminController::class, 'subir'])->name('subir');
// Ruta para la vista 'about'
Route::get('/about', [AdminController::class, 'about'])->name('about');


//ruta del chatbox
Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');




