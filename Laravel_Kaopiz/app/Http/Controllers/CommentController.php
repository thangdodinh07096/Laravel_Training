<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $post = Post::find($id);
        $comment = new Comment();
        $comment->user_name = $request->get('user_name');
        $comment->content_comment = $request->get('content_comment');
        $comment->post_id = $post->id;
        $comment->save();
        $comments = Comment::wherePost_id($id)->get();
        return view('posts.show')->with(['post'=>$post, 'comments'=>$comments]);
    }
}
