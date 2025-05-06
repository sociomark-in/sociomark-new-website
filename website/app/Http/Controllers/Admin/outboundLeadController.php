<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\outboundLead;

class outboundLeadController extends Controller
{
    public function addLead(){
        return view('admin/Pages/inBoundLead/addLead');
    }

    public function StoreLead(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'linkedin_url' => 'nullable|url',
            'website_url' => 'nullable|url',
            'status' => 'required|in:New,inProgress,active,done',
            'industry' => 'nullable|string',
            'service' => 'nullable|string',
            'location' => 'nullable|string',
            'source' => 'nullable|string',
            'first_contact_date' => 'nullable|date',
            'previous_contact_date' => 'nullable|date',
            'follow_up_date' => 'nullable|date',
            'assigned_to' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        outboundLead::create($validated);

        return redirect()->back()->with('success', 'Lead created successfully!');
    }
}

