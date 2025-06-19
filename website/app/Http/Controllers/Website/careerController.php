<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobApplication;

class careerController extends Controller
{
    public function innerCareer()
    {
        return view('frontend.innerCareers');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|max:255',
            'phone'  => 'required|digits:10',
            'cv'     => 'required|file|mimes:pdf,doc,docx|max:2048',
            'plinks' => 'nullable|string|max:500',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        JobApplication::create([
            'name'   => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'cv'     => $cvPath,
            'plinks' => $request->plinks,
        ]);

        return back()->with('success', 'Application submitted successfully!');
    }
}
