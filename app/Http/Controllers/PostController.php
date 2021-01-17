<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        
       // dd($posts);
        return view('admin/posts/index', [
            'posts' => $posts
        ]);
    }

    public function create(){
      //  $model = new Post;

        return view('admin/posts/create');
    }

    public function store(storeUpdatePost $request){
       
        $post = Post::create($request->all());

        return redirect()->route('posts.index');

    }

    public function show($id){
       
        
        if(!$post = Post::where('id', $id)->first()){
            return redirect()->route('posts.index');
        }
         //dd($post);

        return view('admin.posts.show',[ 'post' => $post]);
    }


    public function destroy($id){


        if(!$post = Post::find($id)){
            return redirect()->route('posts.index');
        }
            $post->delete();
        //dd('Deletendo o post $id');
        return redirect()->route('posts.index')->with('message','Post deletado com sucesso');
    }

    public function edit($id){

        if(!$post = Post::find($id)){
            return redirect()->back();
        }
        return view('admin.posts.edit',[ 'post' => $post]);
    }

    public function update(StoreUpdatePost $request, $id)
    {

        if(!$post = Post::find($id)){
            return redirect()->back();
        }
        
        $post->update($request->all());
        
        return redirect()
                ->route('posts.index')
                ->with('message','Post Criado com sucesso');
    }
}
