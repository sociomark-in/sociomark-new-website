<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\PopUpContact;

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
            'phone' => ['required', 'regex:/^\+?[0-9\s\-]{7,20}$/'],
            'service' => 'required',
            'budget' => 'required',
            'aboutUs' => 'required',
            'messageforus' => 'required',
        ]);        

        Contact::create($request->all());
        return redirect()->route('thankYou')->with('success', 'Your message has been sent successfully!');
    }
    public function popUpStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^\+?[0-9\s\-]{7,20}$/'],
        ]);

        PopUpContact::create($request->all());
        return redirect()->route('thankYou')->with('success', 'Your message has been sent successfully!');
    }
}
