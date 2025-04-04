<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminWorkCultureController extends Controller
{
    public function create()
    {
        return view('Admin/Pages/WorkCultureGallary/Create');
    }
}
