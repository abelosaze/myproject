<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function create(){
        return view('post.create');
    }


    public function store(Request $request){
        // dd($request->all());
        return view('post.store');
        $post=new Post();
        $post->title=$request->input('title');
        $post->author=$request->input('author');
        $post->body=$request->input('body');

        $post->save();
    }

    public function post(){
        // dd(Post::all());
        // return Post::all();
        $post=Post::all();
        return view('post.index', compact('post'));;
    }


    public function show($id){
        $post=Post::find($id);
        return view('post.show',compact('post'));;

    }

    public function edit($id){
       $post=Post::find($id);
        return view('post.edit', compact('post'));

    }

    public function update(Request $request,$id){
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->author=$request->input('author');
        $post->body=$request->input('body');

        $post->save();

        return redirect('/post');
     }
     
     public function destroy($id){
        $post=Post::find($id);
         $post->delete();

      return redirect('/post');
 
     }
}
