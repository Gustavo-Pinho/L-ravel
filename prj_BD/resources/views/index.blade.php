@extends('layouts.master_page')

@section('titulo', 'CRUDvel')

@section('conteudo')
    <h1 class="text-center">CRUDVel</h1>
    <div class="text-center mt-3 mb-4">
        <a href="{{url('aluno/create')}}">
            <button class="btn btn-primary">Cadastrar</button>
        </a>
    </div>

    @if(session('mensagem'))
        <div class="alert alert-success col-6 m-auto text-center">
            <h3>{{session('mensagem')}}</h3>
        </div>
    @endif

    <hr class="border border-light">
    <div class="col-9 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">RM</th> 
                    <th scope="col">Aluno</th> 
                    <th scope="col">Nome da Mãe</th> 
                    <th scope="col">Nome do Pai</th> 
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        
            <tbody>
                @foreach ($aluno as $alunos)
                    <tr>
                        <th scope="row">{{$alunos->cd_rm_aluno}}</th>
                        <td>{{$alunos->nm_aluno}}</td>
                        <td>{{$alunos->nm_mae_aluno}}</td>
                        <td>{{$alunos->nm_pai_aluno}}</td>
                        <td>
                        <a href="{{url("aluno/$alunos->cd_rm_aluno")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("aluno/$alunos->cd_rm_aluno/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("aluno/$alunos->cd_rm_aluno")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>         
@stop

