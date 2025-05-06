<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\PopUpContact;

class ContatListController extends Controller
{
    public function index()
    {
        $contactLists = Contact::orderBy("created_at", "desc")->paginate(10);
        return view("admin/Pages/Contact/ContactList", compact("contactLists", "popContactLists"));
    }
    // public function popContact()
    // {
    //     $popContactLists = PopUpContact::orderBy("created_at", "desc")->paginate(10);
    //     return view("admin/Pages/Contact/popUpContact", compact("popContactLists"));
    // }
}
