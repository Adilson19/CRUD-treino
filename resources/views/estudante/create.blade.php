@extends('layouts.app')
@section('content')
    <a href="/estudantes" style="
        text-align: center;
        text-decoration: none;
        color: #000;
        cursor: pointer;
    ">Lista Estudantes</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <form action="/estudantes" method="post"
        style="
            background-color: #000;
            color:#FFF;
            border: 1px solid grey;
            width: 15%;
        ">
        @method('POST')
        @csrf

        <input type="text" name="nome" placeholder="Nome" />
        @if($errors->has('nome'))
            <p>{{$errors->first('nome')}}</p>
        @endif
        <br/>
        <input type="date" name="data_de_nascimento" placeholder="Data" />
        @if($errors->has('data_de_nascimento'))
            <p>{{$errors->first('data_de_nascimento')}}</p>
        @endif
        <br/>
        <input type="text" name="turma" placeholder="Turma" />
        @if($errors->has('turma'))
            <p>{{$errors->first('turma')}}</p>
        @endif
        <br/>
        <p style="
            text-align: center;
            marigin-right: 40px;
        "><button type="submit">Salvar</button></p>

    </form>
@endsection