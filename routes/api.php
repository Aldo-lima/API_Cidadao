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
//=============================Rotas de Cidadão===========================
Route::get('cidadoes', [CidadaoController::class, 'index']);
Route::get('cidadaocpf', [CidadaoController::class, 'buscaCpf']);
Route::get('cidadao/{id}', [CidadaoController::class, 'show']);
Route::put('cidadao/update/{id}', [CidadaoController::class, 'update']);
Route::post('cidadao/store', [CidadaoController::class, 'store']);
Route::delete('cidadao/delete/{id}', [CidadaoController::class, 'destroy']);


//==============================Rota via CEP================================
Route::get('cep', [ViaCepController::class, 'consutaCEP']);

//==============================Rota de Contatos============================
Route::put('contato/update/{id}', [ContatoController::class, 'update']);
Route::post('contato/store', [ContatoController::class, 'store']);
Route::put('contato/update/{id}', [ContatoController::class, 'update']);
Route::delete('contato/delete/{id}', [ContatoController::class, 'destroy']);
Route::get('contatos', [ContatoController::class, 'index']);

//==============================Rotas de Endereços=========================
Route::post('endereco/store', [EnderecoController::class, 'store']);
Route::put('endereco/update/{id}', [EnderecoController::class, 'update']);
Route::delete('endereco/detete/{id}', [EnderecoController::class, 'destroy']);
Route::get('enderecos', [EnderecoController::class, 'index']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
