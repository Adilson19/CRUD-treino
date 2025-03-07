<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudanteUpdateRequest extends FormRequest
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
            'turma',
        ];
    }

    public function attributes(): array
    {
        return [
            'nome' => 'Nome',
            'data_de_nascimento' => 'Data de nascimento',
            'turma' => 'Turma'
        ];
    }
}