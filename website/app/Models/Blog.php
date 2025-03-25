<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'content', 
        'seo_meta_title', 
        'seo_meta_description', 
        'seo_meta_keywords',
        'tags',
        'image', 
        'display_on_home', 
        'slug', 
        'status', 
        'category_id'
    ];

    protected $casts = [
        'tags' => 'array',
        'display_on_home' => 'boolean',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
