<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog()
    {
        return view('blog');
    }


    public function store()
    {
        // Blog::create(request()->all());
    }
    
public function post(){
    return view('post.index');
}

}
