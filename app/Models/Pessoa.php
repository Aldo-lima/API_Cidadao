<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    protected $fillable = [
     'nome',
     'sobre_nome',
     'cpf',
    ];

    public function contato(){

        return $this->hasOne(Contato::class);
    }
    public function endereco(){

        return $this->hasOne(Endereco::class);
    }

}
