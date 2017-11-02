<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'nome' => 'required|min:3',
            'sobrenome' => 'required|min:3',
            'email' => 'required|email',
            'telefone' => 'required|min:3'
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'É necessário digitar o nome do cliente',
            'sobrenome.required' => 'É necessário digitar o sobrenome do cliente',
            'email.required' => 'É necessário digitar o e-mail do cliente',
            'email.email' => 'O e-mail digitado é inválido',
            'telefone.required' => 'É necessário digitar o telefone do cliente'
        ];
    }
}
