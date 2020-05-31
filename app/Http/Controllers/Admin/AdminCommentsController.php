<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;




class AdminCommentsController extends Controller
{
    public function edit(Comment $comment)
    {
        return view('admin.comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'body' => 'required'
        ]);

        $comment->body = $request->body;
        $comment->save();
        return redirect()->route('posts.show', $comment->post->id)->with('success', 'Comment Edited');

    }

    public function delete(Comment $comment)
    {
        return view('admin.comments.delete',compact('comment'));
    }

    public function destroy(Comment $comment)
    {
        $post_id = $comment->post->id;
        $comment->delete();
        return redirect()->route('posts.show', $post_id)->with('success', 'Comment Removed');
    }




}
