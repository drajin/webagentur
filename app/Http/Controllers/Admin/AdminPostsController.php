<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Post;
use App\Tag;
use Image;
use Storage;
use Illuminate\Support\Facades\Auth;
use App\DataTable\PostsDataTable;


class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index',['posts' => Post::latest()->paginate(5) ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PostsDataTable $dataTable)
    {
        $tags = Tag::pluck('name', 'id');
        $dataTable = $dataTable
                ->button('Create Post')
                ->input()
                ->slug()
                ->text()
                ->select($tags);
        return view('admin.posts.create', compact('dataTable','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = new Post;
        $post->title = request('title');
        $post->slug = request('slug');
        $post->body = request('body');



//        $post = Post::create([
//            'title' => request('title'),
//            'slug' => request('slug'),
//            'body' => request('body')
//        ]);

        if(request('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(750, 375)->save($location);

            $post->image = $filename;
        }
        $post->save();

        $post->tags()->sync(request('tags'), false);
        return redirect()->route('posts.index')->with('success','Post created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('/admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, PostsDataTable $dataTable)
    {
        //$selected_tags = $post->tags->pluck('name');
        $selected_tags = $post->tags->pluck('name')->toArray();
        $tags = Tag::pluck('name', 'id');
        // a moze i ovako
//        $tags = Tag::all();
//        $tags3= [];
//        foreach($tags as $tag){
//            $tags3[$tag->id] = $tag->name;
//        }
        $dataTable = $dataTable
                ->button('Update Post')
                ->text($post->body)
                ->input($post->title)
                ->slug($post->slug)
                ->select($tags, $selected_tags);

        return view('admin.posts.edit', compact('post', 'dataTable', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
//        $post->update([
//            'title' => request('title'),
//            'slug' => request('slug'),
//            'body' => request('body')
//        ]);

        $post->title = request('title');
        $post->slug = request('slug');
        $post->body = request('body');

        if($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(750, 375)->save($location);
            $old_file_name = $post->image;

            $post->image = $filename;

            Storage::delete($old_file_name);
        }

        $post->save();

        $post->tags()->sync($request->tags);

        return redirect()->route('posts.index')->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, Request $request)
    {
        $post->tags()->detach();

        if($post->image) {
            Storage::delete($post->image);
        }
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post removed');
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));

    }
}
