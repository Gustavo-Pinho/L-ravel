@extends('Layouts.master_page')

@section('titulo', 'Aluno - Cadastro')

@section('conteudo')
    <h1 class="text-center">
        @if(isset($aluno))
            Editar
        @else
            Cadastrar            
        @endif
    </h1>
    <hr class="border border-light">

    <div class="col-8 m-auto">
        @if(isset($errors) && count($errors) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div> 
        @endif
        @if (isset($aluno))
            <form name="frmEdit" id="frmEdit" method="POST" action="{{url("aluno/$aluno->cd_rm_aluno")}}">
            @method('PUT')
        @else  
            <form name="frmcadastro" id="frmcadastro" method="POST" action="{{url('aluno')}}">
        @endif
                @csrf
                <input class="form-control" type="text" name="nome_aluno" id="nome_aluno" placeholder="Nome do Aluno: " value="{{$aluno->nm_aluno ?? ''}}"><br>

                <input class="form-control" type="text" name="nome_mae" id="nome_mae" placeholder="Nome da Mãe: " value="{{$aluno->nm_mae_aluno ?? ''}}"><br>

                <input class="form-control" type="text" name="nome_pai" id="nome_pai" 
                placeholder="Nome do Pai: " value="{{$aluno->nm_pai_aluno ?? ''}}"><br>

                <input class="btn btn-primary col-12" type="submit" value="@if(isset($aluno)) Atualizar Aluno @else Cadastrar Aluno @endif">
            </form>
    </div>
@stop