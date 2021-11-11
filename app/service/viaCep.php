<?php
namespace App\service;

class ViaCep{


  /**
  * Método responsável por consultat no um CEP no ViaCEP
  * @param string $cep
  * @return array json
  */

 public static function ConsultarCEP($cep)
 {
    //INICIA O CURL
    $curl = curl_init();

    //CONFIGURAÇÕES DO CURL
    curl_setopt_array($curl,[
        CURLOPT_URL =>'viacep.com.br/ws/'.$cep.'/json/',
        CURLOPT_RETURNTRANSFER =>   true,
        CURLOPT_CUSTOMREQUEST => 'GET'
  ]);
   //RESPONSE
  $respons = curl_exec($curl);
  //FECHA A CONEXÃO ABERTA
  curl_close($curl);
   //RETORNA
  return $respons;
 }

}
