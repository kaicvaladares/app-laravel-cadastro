<h2>Cadastrar Novo Post</h2>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('posts.store')}}" method="POST">
   @csrf
    <input type="text" name="title" placeholder="Digite um Titulo" value="{{old('title')}}">
    <textarea name="content" id="content" cols="30" rows="10" placeholder="conteudo" >
        {{old('content')}}
    </textarea>
    <button type="submit">Cadastrar Post</button>
</form>