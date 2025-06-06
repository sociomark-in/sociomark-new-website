<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin/Pages/Tags/AddTag');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags,name',
            'canonicals' => 'url|nullable',
            'blog_schema' => 'string|nullable',
        ]);

        Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'canonicals' => $request->canonicals,
            'blog_schema' => $request->blog_schema,
        ]);

        return redirect()->route('tags.create')->with('success', 'Tag created successfully!');
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|unique:tags,name,' . $tag->id,
            'canonicals' => 'url|nullable',
            'blog_schema' => 'string|nullable',
        ]);

        $tag->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'canonicals' => $request->canonicals,
            'blog_schema' => $request->blog_schema,
        ]);

        return redirect()->route('tags.index')->with('success', 'Tag updated successfully!');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index')->with('success', 'Tag deleted successfully!');
    }
}
