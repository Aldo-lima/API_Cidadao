<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CidadaoController;
use App\Http\Controllers\api\ContatoController;
use App\Http\Controllers\api\EnderecoController;
use App\Http\Controllers\api\ViaCepController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('cidadoes', [CidadaoController::class, 'index']);
Route::get('cidadaocpf', [CidadaoController::class, 'buscaCpf']);
Route::get('cidadao/{id}', [CidadaoController::class, 'show']);
Route::put('cidadao/{id}', [CidadaoController::class, 'update']);
Route::post('cidadao', [CidadaoController::class, 'store']);
Route::delete('cidadao/{id}', [CidadaoController::class, 'destroy']);

Route::get('cep', [ViaCepController::class, 'consutaCEP']);

Route::post('contato', [ContatoController::class, 'store']);
Route::get('contatos', [ContatoController::class, 'index']);

Route::post('endereco', [EnderecoController::class, 'store']);
Route::get('enderecos', [EnderecoController::class, 'index']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});