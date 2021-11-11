<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable=[
    'cep',
    'logradouro',
    'numero',
    'bairro',
    'cidade',
    'uf',
    'pessoa_id',
    ];
    
    public function pessoa(){
        return $this->belongsTO(Pessoa::class);
    }


}
