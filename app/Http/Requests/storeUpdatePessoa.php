<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUpdatePessoa extends FormRequest
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
            'nome' => 'required|min:3|max:160',
            'mail' => ['required','min:5','max:100'],
            'data_nascimento' => 'required','date',
            'cpf' => 'required',
            'telefone_contato' => 'required',
           ];
    }
}
