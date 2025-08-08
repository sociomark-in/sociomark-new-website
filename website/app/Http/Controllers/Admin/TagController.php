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
        $locale = app()->getLocale();
        return view('admin/Pages/Tags/listTag', compact('tags', 'locale'));
    }

    public function create()
    {
        return view('admin/Pages/Tags/AddTag');
    }

    public function store(Request $request)
    {
        $validated =  $request->validate([
            'name.en' => 'required|unique:tags,name',
            'name.ar' => 'required|unique:tags,name',
            'slug' => 'required',
            'canonicals' => 'url|nullable',
            'blog_schema' => 'string|nullable',
            'meta_title'      => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        $tag = Tag::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['slug']),
            'canonicals' => $validated['canonicals'],
            'blog_schema' => $validated['blog_schema'],
            'meta_title' => $validated['meta_title'],
            'meta_description' => $validated['meta_description'],
        ]);

        return redirect()->route('tags.create')->with('success', 'Tag created successfully!');
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin/Pages/Tags/editTag', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $validated = $request->validate([
            'name.en' => 'required|unique:tags,name->en,' . $tag->id,
            'name.ar' => 'required|unique:tags,name->ar,' . $tag->id,
            'slug' => 'required',
            'canonicals' => 'url|nullable',
            'blog_schema' => 'string|nullable',
            'meta_title'      => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        $tag->update([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['slug']),
            'canonicals' => $validated['canonicals'],
            'blog_schema' => $validated['blog_schema'],
            'meta_title' => $validated['meta_title'],
            'meta_description' => $validated['meta_description'],
        ]);

        return redirect()->route('tags.index')->with('success', 'Tag updated successfully!');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index')->with('success', 'Tag deleted successfully!');
    }
}
