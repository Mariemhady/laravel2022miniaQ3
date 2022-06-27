<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("posts",
[PostController::class, "index"]);

Route::get("/post/{index}", [PostController::class, "show"] );

Route::get("posts/create", 
[PostController::class, "create"]);

Route::post("/posts/store", [PostController::class, "store"]);

Route::get("/about", function(){
    return view("aboutus");
});


Route::get("list", [ArticleController::class, "list"])->name("article.list");

Route::get("/create", [ArticleController::class, "create"])->name("article.create");
Route::post("/store", [ArticleController::class, "store"]);

Route::get("/show/{id}", [ArticleController::class, "show"])->name("article.show");

Route::get("/edit/{id}", [ArticleController::class, "edit"]);

//post --> new data
// get --> get data
//  put/patch --> edit 
//    delete  

Route::put("/update/{id}", [ArticleController::class, "update"]);

Route::delete("/delete/{id}", [ArticleController::class, "destroy"]);


Route::resource("blogs", BlogController::class);


