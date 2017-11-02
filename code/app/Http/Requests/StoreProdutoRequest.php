<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
            'referencia' => 'required|unique:produtos|min:3',
            'titulo' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return[
            'titulo.required' => 'O título é obrigatório!',
            'titulo.min' => 'O tamanho mínimo do título são de 3 caracteres',
            'referencia.required' => 'A referência é obrigatória!',
            'referencia.min' => 'O tamanho mínimo da referência é de 3 caracteres',
            'referencia.unique' => 'Esta referencia já está em uso!',
        ];
    }
}
