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
