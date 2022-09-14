<?php 

use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('Tarea/registrar', [TareaController::class, 'create'])->name('Tarea.create');
Route::post('Tarea/guardar', [TareaController::class, 'store'])->name(Tarea.store);

