<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudanteStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string',
            'data_de_nascimento' => 'required|date',
            'turma' => 'required|string',
        ];
    }

    public function attributes(): array
    {
        return [
            'nome' => 'Nome',
            'data_de_nascimento' => 'Data de Nascimento',
            'turma' => 'Turma',
        ];
    }
}