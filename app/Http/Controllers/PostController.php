<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;


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
        $users = User::all();
        return view("posts.create", ["data"=>$users]);
    }

    public function store(){
        // dd("hello store ");
        // dd(request()->all());
        // $title = request("title");
        // dd($title);
        $post = new Post;
        $post->title = request("title");
        $post->body = request("body");
        $post->user_id = request("user_id");
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

        public function usersPost($id){
            $user = User::findorfail($id);
            // dd($user);
            return view("posts.userPosts", ["data"=>$user]);
            
        }
}
