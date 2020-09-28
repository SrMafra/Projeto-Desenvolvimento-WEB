<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncaoController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\TipoDeEpiController;
use App\Http\Controllers\EpiController;
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



Route::resource('/funcao', FuncaoController::class);
Route::get('/funcao/destroy/{id}', [FuncaoController::class, 'destroyConfirm'])->name('funcao.destroy-confirm');

Route::resource('/setor', SetorController::class);
Route::get('/setor/destroy/{id}', [SetorController::class, 'destroyConfirm'])->name('setor.destroy-confirm');

Route::resource('/funcionario', FuncionarioController::class);
Route::get('/funcionario/destroy/{id}', [FuncionarioController::class, 'destroyConfirm'])->name('funcionario.destroy-confirm');


Route::resource('/tipo_de_epi', TipoDeEpiController::class);
Route::get('/tipo_de_epi/destroy/{id}', [TipoDeEpiController::class, 'destroyConfirm'])->name('tipo_de_epi.destroy-confirm');

Route::resource('/epi', EpiController::class);
Route::get('/epi/destroy/{id}', [EpiController::class, 'destroyConfirm'])->name('epi.destroy-confirm');
