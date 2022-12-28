<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetoFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome_projeto' => ['required', 'min:1'],
            'tipo_projeto' => ['required', 'string'],
            'descricao' => ['required', 'string', 'min:1'],
            'data_inicio' => ['required', 'date'],
            'templates_projeto' => ['required', 'string',]

            
        ];
    }
}
