<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;

class AdminTagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Tag::create(request()->validate([
            'name' => 'required|max:255'
        ]));
//        $request->validate([
//            'tag_name' => 'required|max:255'
//        ]);
//        $tag = new Tag;
//        $tag->name = $request->tag_name;
//        $tag->save();

        return redirect(route('tags.index'))->with('success', 'Tag added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Tag $tag)
    {
        $tag->update(request()->validate([
            'name' => 'required|max:255'
        ]));

//        $request->validate([
//            'name' => 'required|max:255'
//        ]);
//        $tag->name = $request->name;
//        $tag->save();
        return  redirect(route('tags.index'))->with('success', 'Tag updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->posts()->detach();
        $tag->delete();
        return redirect()->route('posts.index')->with('success', 'Tag removed');
    }
}
