<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'description',
        'slug',
        'canonicals',
        'blog_schema',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'category_name' => 'array', // for multilingual category name
    ];

    // Automatically set slug when creating a category
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            // Assuming category_name is an array like ['en' => 'Web Design', 'hi' => 'वेब डिज़ाइन']
            $defaultLanguage = 'en'; // Change based on your default language
            $name = $category->category_name[$defaultLanguage] ?? reset($category->category_name);
            $category->slug = Str::slug($name);
        });
    }

    // Remove this if not doing self-referencing many-to-many
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
