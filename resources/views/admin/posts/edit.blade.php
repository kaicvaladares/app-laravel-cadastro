<h2>Editar o Post <strong> {{$post->title}}</strong></h2>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('posts.update', $post->id)}}" method="post">
   @csrf
   @method('put')
    <input type="text" name="title" placeholder="Digite um Titulo" value="{{$post->title}}">
    <textarea name="content" id="content" cols="30" rows="10" placeholder="conteudo" >
        {{$post->content}}
    </textarea>
    <button type="submit">Cadastrar Post</button>
</form>