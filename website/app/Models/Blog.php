<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_name',
        'content',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'slug',
        'tags',
        'categories',
        'images',
        'status',
        'display_on_home',
    ];

    protected $casts = [
        'tags' => 'array',
        'categories' => 'array',
        'images' => 'array',
        'display_on_home' => 'boolean',
    ];

    // ✅ Retrieve categories based on stored category IDs (JSON field)
    public function categoryObjects()
    {
        return Category::whereIn('id', $this->categories)->get();
    }

    // ✅ Retrieve tags based on stored tag IDs (JSON field)
    public function tagObjects()
    {
        return Tag::whereIn('id', $this->tags)->get();
    }
    public function getCategoryNames()
    {
        return Category::whereIn('id', $this->categories)->pluck('category_name')->toArray();
    }
    public function getTagNames()
    {
        return Tag::whereIn('id', $this->tags)->pluck('name')->toArray();
    }
    public function getCategoryNamesAttribute()
    {
        return Category::whereIn('id', $this->categories ?? [])->pluck('category_name')->toArray();
    }
}
