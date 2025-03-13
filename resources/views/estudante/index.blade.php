@extends('layouts.app')
@section('content')
<a href="/estudantes/create" style="
    text-align: center;
    text-decoration: none;
    color: #000;
    cursor: pointer;
">Novo Estudante</a>
    <table border="1" width="50%" 
        style="
            color:black; 
            background-color: grey;
            text-align: center;
        ">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Turma</th>
                <th>Editar/Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudantes as $estudante)
                <tr>
                    <td>{{ $estudante->pessoa->nome }}</td>
                    <td>{{ $estudante->pessoa->data_de_nascimento }}</td>
                    <td>{{ $estudante->turma }}</td>
                    <td>
                        <a href="/estudantes/{{ $estudante->id }}/edit"
                            style="
                                color: black;
                                background-color:white;
                                border: 1px solid black;
                                text-decoration: none;
                                padding:1px 3px;
                                margin-top: 2px;
                                margin-bottom: 2px;
                                "
                            >Editar</a>
                        {{-- Criando o botao de delete --}}
                        <form action="/estudantes/{{ $estudante->id }}" method="post"
                            style="
                                display-inline: block;
                            ">
                            @csrf {{-- Gerando os tookens --}}
                            @method('DELETE'){{-- O metodo delete que vai ser utilizado --}}
                            <button type="submit">eliminar</button>
                        </form>
                        {{-- Fim da Criacao do botao de delete --}}

                        {{-- -Show --}}
                        <a href="/estudantes/{{ $estudante->id }}"
                            style="
                                color: black;
                                background-color:white;
                                border: 1px solid black;
                                text-decoration: none;
                                padding:1px 3px;
                                margin-top: 2px;
                                margin-bottom: 2px;
                                "
                            >Detalhes</a>
                        {{-- Fim do comando Show --}}
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
