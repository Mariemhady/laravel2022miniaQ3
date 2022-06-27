<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        // $posts = [
        //     ["title" => "post 1 title", "description"=> "post 1 description"],
        //     ["title" => "post 2 title", "description"=> "post 2 description"], 
        //     ["title" => "post 3 title", "description"=> "post 3 description"],
        // ];
        $posts = Post::all();
        return view("posts.index",["data" => $posts] );
    }


    public function show($id){
        $post = Post::find($id);
        // dd($post);
        return view("posts.show", ["data" => $post] );
    }

    public function create(){
        return view("posts.create");
    }

    public function store(){
        // dd("hello store ");
        // dd(request()->all());
        // $title = request("title");
        // dd($title);
        $post = new Post;
        $post->title = request("title");
        $post->body = request("body");
        $post->save();
        return redirect("/posts");
        // return view("posts.index"); 

    }
    public function edit($id){
        $post = Post::findorfail($id);
        return view("posts.edit", ["data" => $post]);
    }

    
    public function update($id){
    $students = new Post;
    $students = $students->findorfail($id);
    $students->title = request("title");
    $students->body = request("body");
    $students->save();
}
}
