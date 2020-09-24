<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncaoController;
use App\Http\Controllers\SetorController;

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
