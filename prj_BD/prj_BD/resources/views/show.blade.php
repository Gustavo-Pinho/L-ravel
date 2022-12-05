@extends('layouts.master_page')

@section('titulo','Aluno - Visualização')

@section('conteudo')
    <h1 class="text-center">Visualizar</h1>
    <hr>
    <div class="card border-dark" style="display: flex; width:30%; margin: 0 auto;">
        <ul class="list-group list-group-flush text-center">
            <li class="list-group-item"><b>Aluno:</b> {{$aluno->nm_aluno}}</li>
            <li class="list-group-item"><b>Nome da Mãe:</b> {{$aluno->nm_mae_aluno}}</li>
            <li class="list-group-item"><b>Nome do Pai:</b> {{$aluno->nm_pai_aluno}}</li>
        </ul>
    </div>

    <a style="width:100%; display:flex; justify-content:center;" href="{{url("aluno")}}">
        <button class="btn btn-danger" style="margin-top: 1rem">Voltar</button>
    </a>
@stop
    
    
