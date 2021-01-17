@extends('admin.layouts.app')
@section('title','Detalhes Pessoa')

@section('content')
    <h1>Detalhes da Pessoa: {{$post->nome}}</h1>
    <ul>
        <li><strong>Verifique suas informações: </strong></li>
    </ul>
    <ul class="list-group">
        <li class="list-group-item active">INFORMAÇÕES</li>
        <li class="list-group-item"><strong>Nome: </strong>{{$post->nome}}</li>
        <li class="list-group-item"><strong>Data Nascimento: </strong>{{$post->data_nascimento}}</li>
        <li class="list-group-item"><strong>E-mail: </strong> {{$post->mail}}</li>
        <li class="list-group-item"><strong>Cpf: </strong>{{$post->cpf}}</li>
        <li class="list-group-item"><strong>Telefone: </strong> {{$post->telefone_contato}}</li>
    </ul>
    <form action="{{route('pessoa.destroy', $post->id)}}" method="POST">
        @csrf
        <input type="hidden" name = "_method" value="DELETE">
        <button type="submit" class="btn btn-danger" style="margin-top: 2rem;">Excluir Registro</button>
    </form>
@endsection