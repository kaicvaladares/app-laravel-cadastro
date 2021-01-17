@extends('admin.layouts.app')

@section('content')
    <h2><strong>Cadastrar Nova Pessoa</strong></h2>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('pessoa.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome"  placeholder="Digite su nome" value="{{old('nome')}}">
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="data_nascimento">Data Nascimento</label>
                    <input type="text" class="form-control" name="data_nascimento" value="{{old('data_nascimento')}}" id="formGroupExampleInput2" placeholder="ex: 19/15/1994">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="mail" value="{{old('mail')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
                    <small id="emailHelp" class="form-text text-muted">Lembre-se de adiconar um e-mail valido.</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" value="{{old('cpf')}}" id="formGroupExampleInput2" placeholder="ex: 19/15/1994">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="data_nascimento">Telefone</label>
                    <input type="text" class="form-control" name="telefone_contato" value="{{old('telefone_contato')}}" id="formGroupExampleInput2" placeholder="ex: (99) 99999-9999">
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

