@extends('admin.layouts.app')
@section('title','Editar Pessoa')

@section('content')
    <h2>Editar Pessoa <strong> {{$post->nome}}</strong></h2>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('pessoa.update', $post->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome"  placeholder="Digite su nome" value="{{$post->nome}}">
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="data_nascimento">Data Nascimento</label>
                    <input type="text" class="form-control" name="data_nascimento" value="{{$post->data_nascimento}}" id="formGroupExampleInput2" placeholder="ex: 19/15/1994">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="mail" value="{{$post->mail}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
                    <small id="emailHelp" class="form-text text-muted">Lembre-se de adiconar um e-mail valido.</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" value="{{$post->cpf}}" id="formGroupExampleInput2" placeholder="ex: 19/15/1994">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="data_nascimento">Telefone</label>
                    <input type="text" class="form-control" name="telefone_contato" value="{{$post->telefone_contato}}" id="formGroupExampleInput2" placeholder="ex: (99) 99999-9999">
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 2rem;">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar Cadastro</button>
            </div>
        </div>
      </form>
        
@endsection