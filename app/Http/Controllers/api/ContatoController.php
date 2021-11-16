<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContatoRequest;


class ContatoController extends Controller
{

  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $contatos = Contato::all();
     return response()->json($contatos);
    }
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContatoRequest $request)
    {
        $contato = Contato::create($request->all());
        $menssagem = 'Contato incluido com sucesso!';
        return  response()->json([$menssagem, $contato]);
    }

    public function update(ContatoRequest $request, $id)
    {
        $contato = Contato::find($id);
        $contato->update($request->all());
        $menssagem = 'contato editado com sucesso!';
        return  response()->json([$menssagem, $contato]);

    }

    


}
