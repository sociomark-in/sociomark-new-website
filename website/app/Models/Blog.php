<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_title',
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
        'canonicals',
        'blog_schema',
    ];

    protected $casts = [
        'card_title' => 'array',
        'blog_name' => 'array',
        'content' => 'array',
        'tags' => 'array',
        'categories' => 'array',
        'images' => 'array',
        'display_on_home' => 'boolean',
    ];

    // Optional: get full category objects
    public function categoryObjects()
    {
        return Category::whereIn('id', $this->categories ?? [])->get();
    }

    // Optional: get full tag objects
    public function tagObjects()
    {
        return Tag::whereIn('id', $this->tags ?? [])->get();
    }

    // Used in Blade: $blog->category_names
    public function getCategoryNamesAttribute()
    {
        $locale = app()->getLocale(); // or 'en' as default
        return Category::whereIn('id', $this->categories ?? [])
            ->get()
            ->map(function ($category) use ($locale) {
                return $category->category_name[$locale] ?? $category->category_name['en'] ?? 'Unknown';
            })
            ->toArray();
    }


    public function getTagNamesAttribute()
    {
        return Tag::whereIn('id', $this->tags ?? [])->pluck('name')->toArray();
    }
}
