<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContatListController extends Controller
{
    public function index()
    {
        $contactLists = Contact::orderBy("created_at", "desc")->paginate(10);
        return view("Admin/Pages/Contact/ContactList", compact("contactLists"));
    }
}
