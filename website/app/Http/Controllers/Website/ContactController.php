<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view("Frontend/ContactUs");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'service' => 'required',
            'budget' => 'required',
            'aboutUs' => 'required',
            'messageforus' => 'required|string',
        ]);

        Contact::create($request->all());
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
