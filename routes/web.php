<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehiculoController;
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
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\TareaController;

Route::resource('tareas', TareaController::class);
Route::resource('clientes', ClienteController::class);
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::resource('estados', EstadoController::class);
Route::resource('ordenes', OrdenController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/vehiculos', VehiculoController::class);

    
});

require __DIR__.'/auth.php';
