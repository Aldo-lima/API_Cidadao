<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable =[
     'telefone',
     'email',
     'pessoa_id',
    ];

    public function pessoa(){
        return $this->belongsTO(Pessoa::class);
    }
}
