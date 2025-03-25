<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    // Define Many-to-Many Relationship
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post', 'cat_id', 'id');
    }
}
