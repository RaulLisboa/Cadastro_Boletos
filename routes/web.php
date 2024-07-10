<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BetaController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BetaController::class, 'index'])->name('betas.index');
Route::post('/betas', [BetaController::class, 'store'])->name('betas.store');
Route::get('/betas/{beta}/edit',[BetaController::class, 'edit'])->name('betas.edit');
Route::put('/betas/{beta}', [BetaController::class, 'update'])->name('betas.update');
Route::delete('/betas/{beta}', [BetaController::class, 'destroy'])->name('betas.destroy');