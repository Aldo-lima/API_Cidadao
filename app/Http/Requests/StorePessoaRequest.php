<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePessoaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=> 'bail|required|min:4|max:20',
            'sobre_nome'=> 'bail|required|min:4|max:20',
            'cpf'=> 'bail|required|min:11|max:20|unique:pessoas',
            'telefone' => 'bail|required|integer',
            'email' => 'bail|required|min:8|max:50|email',
            'cep' => 'bail|required|integer',
            'logradouro' => 'bail|required|min:4|max:100',
            'numero'=> 'bail|required|integer',
            'bairro' => 'bail|required|min:4|max:50',
            'cidade' => 'bail|required|min:4|max:50',
            'uf' => 'bail|required|min:2|max:20',
        ];
    }

public function messages()
{
    return[
        'nome.required'=>'O campo nome é obbrigatorio!',
        'sobre_nome.required'=>'O campo sobre_nome é obbrigatorio!'
    ];

}

}
