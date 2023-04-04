<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrcamentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required',
            'email' => 'required',
            'tipo_orcamento' => 'required',
            'opcoes_escolhida' => 'required',
            'qtd_paginas' => 'required',
            'autenticacao' => 'required',
            'pagamento' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo nome e obrigatório',
            'email.required' => 'Campo email e obrigatório',
            'tipo_orcamento.required' => 'Selecione uma opcao e obrigatório opcoes(Web,Mobile,Desktop)',
            'opcoes_escolhida.required' => 'Opcoes escolhida e um campo obrigatorio',
            'qtd_paginas.required' => 'Campo nome e obrigatório',
            'autenticacao.required' => 'Campo autenticacao e obrigatório',
            'pagamento.required' => 'Campo pagamento e obrigatório',
        ];
    }
}
