<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = Post::all();
        return view("posts", [
            "allPosts" => $allPosts
        ]);
    }

    public function show($id)
    {
        // $post = Post::where("id", $id)->first();
        $post = Post::find($id);
        return view('post', [
            "post" => $post
        ]);
    }

    public function create()
    {
        return view('create_post');
    }

    public function store()
    {
        // $allData = request()->all();
        // dd($allData);

        $pureData = request()->validate([
            'title' => "required",
            "author" => "required",
            "body" => "required"
        ]);


        $post = new Post();
        $post->create($pureData);

        return redirect(route('home'))->with('create', 'Post created');
    }

    public function edit(Post $post)
    {

        // $post = Post::find($id);
        return view('edit_post', compact('post'));
    }

    public function update(Post $post)
    {
        $post->update(request()->validate([
            'title' => "required",
            "name" => "required",
            "body" => "required"
        ]));

        return redirect('/post/' . $post->id)->with('update', 'Post updated');
    }

    public function delete(Post $post)
    {
        // $post = Post::find($id);
        $post->delete();
        return redirect('/')->with('delete', 'Post deleted');
    }
}
