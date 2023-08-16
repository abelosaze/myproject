<?php

namespace App\Http\Controllers;
use App\Models\Workers;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    //
    public function workers()
    {
        return view('works.register');
    }
    
    public function works(){
        // dd(Post::all());
        // return Post::all();
        $workers=Workers::all();
        return view('works.index', compact('works'));;
    }

    public function show2($id){
        $workers=Workers::find($id);
        return view('workers.show2',compact('workers'));;

    }


    public function store2(Request $request){
        // dd($request->all());
        $workers=new Workers();
        $workers->name=$request->input('name');
        $workers->email=$request->input('email');
        $workers->age=$request->input('age');
        $workers->salary=$request->input('salary');
        $workers->address=$request->input('address');
        $workers->contact=$request->input('contact');

        $workers->save();
    }


    
    
}




