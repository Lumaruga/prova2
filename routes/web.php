<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
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

/*Route::get('/', [PersonaController::class, 'index'])->name('index');*/

Route::prefix('persone')->name('persone.')->group(function(){
    Route::get('/', [PersonaController::class, 'index'])->name('index');
    Route::get('/create', [PersonaController::class, 'create'])->name('create');
    Route::get('/{persone}', [PersonaController::class, 'show'])->name('show');
    Route::post('/', [PersonaController::class, 'store'])->name ('store');
    Route::get('{persone}/edit', [PersonaController::class, 'edit'])->name('edit');
    Route::put('/{persone}', [PersonaController::class, 'update'])->name('update');
    Route::delete('/{persone}', [PersonaController::class, 'destroy'])->name('destroy');
});