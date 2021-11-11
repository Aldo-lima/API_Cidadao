<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CidadaoController;

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

Route::post('cidadao/store', [CidadaoController::class, 'store'])->name('salvar');
Route::get('cidadao/busca', [CidadaoController::class, 'buscaCpf'])->name('busca');

Route::get('/', function () {
    return view('teste');
});
