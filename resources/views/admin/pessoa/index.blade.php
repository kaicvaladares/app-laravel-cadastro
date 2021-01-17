@extends('admin.layouts.app')
@section('title','Listagem de Pessoas')

@section('content')

    <h2 style="text-align: center"> Listagem de Pessoas</h2>
    <a href="{{ route('pessoa.create') }}" class="btn btn-success"><i class="fas fa-user"></i> Adicionar Nova Pessoa</a>
    <hr>
    
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Data Nascimento</th>
            <th scope="col">Email</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @php
                $count = 1;
            @endphp
    
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$count++}}</th>
                    <td>{{$post->id}}</td>
                    <td>{{$post->nome}}</td>
                    <td>{{$post->data_nascimento}}</td>
                    <td>{{$post->mail}}</td>
                    <td>{{$post->cpf}}</td>
                    <td>{{$post->telefone_contato}} 
                    <td>
                        <form action="{{route('pessoa.destroy', $post->id)}}" method="POST">
                            @csrf
                            <a href="{{route('pessoa.show',  $post->id)}}"><i class="fas fa-eye"></i></a>
                            <a href="{{route('pessoa.edit',  $post->id)}}"> <i class="fas fa-edit"></i></a>
                            <input type="hidden" name = "_method" value="DELETE">
                            <button type="submit" style="border: unset; color: red; margin-left: 0px;"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
           
        </tbody>
    </table>


@endsection
