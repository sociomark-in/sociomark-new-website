<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\outboundLead;

class outboundLeadController extends Controller
{
    public function addLead()
    {
        return view('admin/Pages/outBoundLead/addLead');
    }

    public function StoreLead(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'linkedin_url' => 'nullable|url',
            'website_url' => 'nullable|url',
            'designation' => 'nullable|string',
            'status' => 'required|in:New,Hot,Warm,Cold',
            'industry' => 'nullable|string',
            'source' => 'nullable|string',
            'first_contact_date' => 'nullable|date',
            'second_followup_date' => 'nullable|date',
            'third_follow_up_date' => 'nullable|date',
            'assigned_to' => 'nullable',
            'notes' => 'nullable|string',
            'notes2' => 'nullable|string',
            'notes3' => 'nullable|string',
            'budget' => 'nullable',
        ]);

        outboundLead::create($validated);

        return redirect()->route('listLead')->with('success', 'Lead created successfully!');
    }
    public function listLead()
    {
        $listLeads = outboundLead::orderBy('created_at', 'desc')->get();
        return view('admin/Pages/outBoundLead/listLead', compact('listLeads'));
    }
    public function editLead($id)
    {
        $lead = outboundLead::findOrFail($id);
        return view('admin/Pages/outBoundLead/EditLead', compact('lead'));
    }


    public function updateLead(Request $request, $id)
    {
        $lead = outboundLead::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'linkedin_url' => 'nullable|url',
            'website_url' => 'nullable|url',
            'designation' => 'nullable|string',
            'status' => 'required|in:New,Hot,Warm,Cold',
            'industry' => 'nullable|string',
            'source' => 'nullable|string',
            'first_contact_date' => 'nullable|date',
            'second_followup_date' => 'nullable|date',
            'third_follow_up_date' => 'nullable|date',
            'assigned_to' => 'nullable',
            'notes' => 'nullable|string',
            'notes2' => 'nullable|string',
            'notes3' => 'nullable|string',
            'budget' => 'nullable'
        ]);

        $lead->update($request->only([
            'name',
            'company_name',
            'email',
            'phone',
            'linkedin_url',
            'website_url',
            'designation',
            'status',
            'industry',
            'source',
            'first_contact_date',
            'second_followup_date',
            'third_follow_up_date',
            'assigned_to',
            'notes',
            'notes2',
            'notes3',
            'budget'
        ]));

        return redirect()->route('listLead')->with('success', 'Lead updated successfully.');
    }




    // Delete blog
    public function deleteLead(outboundLead $lead)
    {
        $lead->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
