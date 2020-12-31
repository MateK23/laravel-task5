<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['post' => Post::get()]);
    }

    public function single(Request $request)
    {
        $currentPost = Post::where("id", $request["id"])->firstOrFail();
        return view("posts.single", ["data" => $currentPost]);
    }

    public function create()
    {
        return view("posts.create");
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
            'author' => $request->input('author'),
        ]);
        return redirect()->route('index');
    }

    public function delete(Request $request)
    {
        Post::where("id", $request->input("id"))->delete();
        return redirect()->back();
    }
}


// Route::get("/", "PostController@index")->name("index");
// Route::get("/single", "PostController@single")->name("single");

// Route::get("/create", "PostController@create")->name("create");
// Route::post("/store", "PostController@store")->name("store");
// Route::post("/update", "PostController@update")->name("update");
// Route::post("/delete", "PostController@delete")->name("delete");
// Route::get("/show", "PostController@show")->name("show");
