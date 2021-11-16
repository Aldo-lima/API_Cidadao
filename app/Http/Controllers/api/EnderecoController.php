<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Endereco;
use App\Http\Requests\StorePessoaRequest;
use App\Http\Requests\EnderecoRequest;


class EnderecoController extends Controller
{


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $enderecos = Endereco::all();
     return response()->json($enderecos);
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnderecoRequest $request)
    {
        $enderecos = Endereco::create($request->all());
        return $enderecos;
    }


    public function update(EnderecoRequest $request, $id)
    {
        $endereco = Endereco::find($id);
        $endereco->update($request->all());
        $menssagem = 'Endereco editado com sucesso!';
        return  response()->json([$menssagem, $endereco]);

    }
          /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $endereco = Endereco::FindOrFail($id);
        $endereco->delete();
        $menssagem = 'Endereco deletado com sucesso!';
        return  response()->json([$menssagem, $endereco]);
    }



}
