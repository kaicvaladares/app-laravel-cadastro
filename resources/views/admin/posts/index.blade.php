@extends('admin.layouts.app')
@section('title','listagem dos posts')

@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-success"> Criar novo Post</a>
    <hr>

    <h2>Olá Internet esses são meus posts</h2>

    @foreach ($posts as $post)
        <div style="border: 1px solid black; margin: 10px;">
            <p><b>Titulo:</b> {{ $post->title}}</p>  <p><b>Conteudo:</b> {{$post->content}}</p>
            <div>
                <a href="{{route('posts.show',  $post->id)}}"> Ver </a>
                <a href="{{route('posts.edit',  $post->id)}}"> Editar </a>
            </div>
            
        </div>
    @endforeach
@endsection
