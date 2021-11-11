<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\service\ViaCep;

class ViaCepController extends Controller


  /**
     * Método responsável por consultat no um CEP no ViaCEP
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   App\service\ViaCep;
     * @param   $cep
     * @return \Illuminate\Http\Response
     */
{
    public function consutaCEP(Request $request)
    {
        $cep = $request->cep;
        $dadosCEP = ViaCep::ConsultarCEP($cep);
        $teste= $dadosCEP;
        return $teste;
    }
}
