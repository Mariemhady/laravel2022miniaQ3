<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Article;
class ArticleController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    // public function __construct(){
    //     $this->middleware('auth', ["only" => "create"]);
    // }

    public function __construct(){
        $this->middleware('auth', ["except" => "list"]);
    }


    public function list(){
        $articles = Article::all();
        return view("articles.list", ["articles"=> $articles ]);
    }

    public function create(){
        return view("articles.create");
    }

    public function store(){
       $article = new Article;
       $article->title = request("title");
       $article->name = request("name");
       $article->number = request("number");

       $article->user_id = auth()->user()->id;
        

       $article->save();
       return redirect()->route("article.list");
    }

    public function show($id){
        $article = Article::findorfail($id);
        return view("articles.show", ["data"=> $article]);
    }


    public function edit($id){
        $article = Article::findorfail($id);
        // dd($article);
        return view("articles.edit", ["data"=> $article]);
    }

    public function update($id){
        $article = new Article;
        $article = Article::findorfail($id);
        $article->title = request("title");
        $article->name = request("name");
        $article->number = request("number");
        $article->save();
        return redirect()->route("article.list");
    }

    public function destroy($id){
        // dd($id);
        $article = Article::findorfail($id);
        $article->delete();
        return redirect()->route("article.list");

    }



}
