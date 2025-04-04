<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {
        return view("Frontend/Industry/ecommerce");
    }
}
