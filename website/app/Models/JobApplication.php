<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'cv',
        'plinks',
        'page_url',
    ];
}
