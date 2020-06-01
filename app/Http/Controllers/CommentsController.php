<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function store(CommentStoreRequest $request, $post_id)
    {
//        $post = Post::find($post_id);
//
//        Comment::create($request->all());

//        $request->validate([
//            'body' => 'required|min:5|max:2000',
//            'name' => 'required|max:255',
//            'email' => 'required|email|max:255',
//        ]);

        $post = Post::find($post_id);

//        Comment::create($post_id, request([
//            'body' => request('body'),
//            'author' => request('author'),
//            'email' => request('email'),
//            'post_id' => $post_id
//        ]));

        $comment = new Comment;
        $comment->body = $request->body;
        $comment->author = $request->author;
        $comment->email = $request->email;
        $comment->post_id = $post->id;
        $comment->save();

        // ne radi dodavanje id za specifican deo strane
        return redirect(route('blog.show', $post->slug, ['#comments-area']))->with('success', 'Comment posted!');



    }


}
