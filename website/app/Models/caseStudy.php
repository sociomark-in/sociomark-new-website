<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class caseStudy extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'url'
    ];
}
