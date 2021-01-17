<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdatePessoa;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    

    public function index(){
        $posts = Pessoa::all();
        
        return view('admin/pessoa/index', [
            'posts' => $posts
        ]);
    }

    
    public function create(){
       
          return view('admin/pessoa/create');
    }

    
    public function store(storeUpdatePessoa $request){
       
        $post = Pessoa::create($request->all());

        return redirect()->route('pessoa.index');

    }

    
    public function destroy($id){

       
        if(!$post = Pessoa::find($id)){
            return redirect()->route('pessoa.index');
        }
            $post->delete();
      
        return redirect()->route('pessoa.index')->with('message','Post deletado com sucesso');
    }

    public function edit($id){
        
        
        if(!$post = Pessoa::find($id)){
            return redirect()->back();
        }
        
        return view('admin.pessoa.edit',[ 'post' => $post]);
    }

    public function update(storeUpdatePessoa $request, $id)
    {
        
        if(!$post = Pessoa::find($id)){
            return redirect()->back();
        }
        
        $post->update($request->all());
        
        return redirect()
                ->route('pessoa.index')
                ->with('message','Post Criado com sucesso');
    }


    public function show($id){
       
        
        if(!$post = Pessoa::where('id', $id)->first()){
            return redirect()->route('posts.index');
        }
         //dd($post);

        return view('admin.pessoa.show',[ 'post' => $post]);
    }




}
