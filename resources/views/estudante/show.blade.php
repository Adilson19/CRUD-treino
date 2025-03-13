@extends('layouts.app')
@section('content')
<a href="/estudantes/" style="
    text-align: center;
        text-decoration: none;
        color: #000;
        cursor: pointer;
">Voltar<a>
    <p>Nome: {{ $estudante->pessoa->nome }}</p>
    <p>Data-de-Nascimento: {{ $estudante->pessoa->data_de_nascimento }}</p>
    <p>Turma: {{ $estudante->turma }}</p>
@endsection
