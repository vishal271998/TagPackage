<?php
namespace Qwetzal\Tag\Controllers;

use Illuminate\Http\Request;
use Qwetzal\Tag\Models\Tag;

class TagController
{
    public function index()
    {
        $tags = Tag::orderBy('id', 'DESC')->get();
        return view('tag::index', compact('tags'));
    }

    public function store(Request $request)
    {
        Tag::create([
           'name' => $request->name
        ]);
        return back()->with('Tag created successfully');
    }

    public function update(Request $request, $tagId)
    {
        $tag = Tag::findorfail($tagId);
        $tag->name = $request->name;
        $tag->save();
        return back()->with('Tag updated successfully');
    }
}