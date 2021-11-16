<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnderecoRequest extends FormRequest
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
            'cep'=> 'bail|required|integer',
            'logradouro' => 'bail|required|min:4|max:100',
            'numero'=> 'bail|required|integer',
            'bairro' => 'bail|required|min:4|max:50',
            'cidade' => 'bail|required|min:4|max:50',
            'uf' => 'bail|required|min:2|max:20',

        ];
    }
}
