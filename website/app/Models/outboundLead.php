<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class outboundLead extends Model
{
    protected $fillable = [
        'name','company_name','email', 'phone', 'linkedin_url', 'website_url',
        'industry', 'service', 'location', 'source', 'status', 'first_contact_date',
        'previous_contact_date', 'notes', 'follow_up_date', 'assigned_to'
    ];
}