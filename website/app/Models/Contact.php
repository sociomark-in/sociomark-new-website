<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Contact extends Model
{
    public $timestamps = true; 
    protected $fillable = [
        'name', 'email', 'phone', 'service', 'budget', 'aboutUs', 'messageforus',
        'utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'
    ];
    
}


