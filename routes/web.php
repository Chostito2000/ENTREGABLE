<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HomeController;

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
});

Route::get('/tours', [TourController::class, 'obtenerTours'])->name('tours.index');

Route::get('/tour/{id}', [TourController::class, 'show'])->name('tour.show');

Route::get('/buscar-tours', [TourController::class, 'buscarTours']);

Route::get('/mi-vista', [TourController::class, 'miVista']);

Route::get('/agregar-tour', [TourController::class, 'formularioCrearTour'])->name('tours.formularioCrearTour');

Route::post('/agregar-tour', [TourController::class, 'agregarTour'])->name('tours.agregar');

Route::get('/tours/actualizar/{id}', [TourController::class, 'actualizarTourForm'])->name('tours.actualizar');

Route::post('/tours/actualizar/{id}', [TourController::class, 'actualizarTour']);

Route::put('/tours/actualizar/{id}', [TourController::class, 'actualizarTour'])->name('tours.actualizar');


Route::get('/tours/eliminar/{id}', [TourController::class, 'eliminarTour'])->name('tours.eliminar');



