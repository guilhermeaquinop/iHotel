<?php

use App\Http\Controllers\HospedesController;
use Illuminate\Support\Facades\Route;

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
    return view('main');
});


Route::prefix('/hospedes')->group(function(){
    Route::get('/cadastrar', [HospedesController::class, 'create'])->name('hospedes.view-cadastrar');
    Route::post('/cadastrar', [HospedesController::class, 'store'])->name('hospedes.cadastrar');
    Route::get('/consultar', [HospedesController::class, 'show'])->name('hospedes.consultar');
    Route::get('/editar/{id_hospede?}', [HospedesController::class, 'edit'])->name('hospedes.editar');
    Route::put('/atualizar/{id_hospede}', [HospedesController::class, 'update'])->name('hospedes.atualizar');
    Route::delete('/deletar/{id_hospede}', [HospedesController::class, 'destroy'])->name('hospedes.deletar');
});


