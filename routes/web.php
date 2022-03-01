<?php

use App\Http\Controllers\CidadaoController;
use App\Http\Controllers\VacinaController;
use App\Http\Controllers\AplicacaoController;
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

Route::get('/cidadaos', [CidadaoController::class, 'index'])->name('cidadaos');
Route::get('/cidadaos/criar', [CidadaoController::class, 'create'])->name('cidadaos.criar');
Route::post('/cidadaos/store', [CidadaoController::class, 'store'])->name('cidadaos.store');

Route::get('/vacinas', [VacinaController::class, 'index'])->name('vacinas');
Route::get('/vacinas/criar', [VacinaController::class, 'create'])->name('vacinas.criar');
Route::post('/vacinas/store', [VacinaController::class, 'store'])->name('vacinas.store');

Route::get('/aplicacoes', [AplicacaoController::class, 'index'])->name('aplicacoes');
Route::get('/aplicacoes/criar', [AplicacaoController::class, 'create'])->name('aplicacoes.criar');
Route::post('/aplicacoes/store', [AplicacaoController::class, 'store'])->name('aplicacoes.store');


