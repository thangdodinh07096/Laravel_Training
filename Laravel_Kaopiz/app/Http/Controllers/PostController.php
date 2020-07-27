<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);
        return view('blog')->with([
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        $comments = Comment::wherePost_id($id)->get();
//        dd($comments);
        return view('posts.show')->with(['post'=>$post, 'comments'=>$comments]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->save();
        return redirect()->route('blog.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        $post = Post::find($id);
        $post->title = $title;
        $post->content = $content;
        $post->save();
        return view('posts.show')->with(['post'=>$post]);
    }

    public function delete($id)
    {
        Post::destroy($id);
        return redirect()->route('blog.index');
    }
}
