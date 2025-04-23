<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function education()
    {
        return view("frontend/Industry/education");
    }
    public function healthcare()
    {
        return view("frontend/Industry/healthcare");
    }
    public function FMCG()
    {
        return view("frontend/Industry/FMCG");
    }
    public function newsMedia()
    {
        return view("frontend/Industry/newsMedia");
    }
    public function realEstate()
    {
        return view("frontend/Industry/realEstate");
    }
    public function logistics()
    {
        return view("frontend/Industry/logistics");
    }
    public function fashionLifestyle()
    {
        return view("frontend/Industry/fashionLifestyle");
    }
    public function gaming()
    {
        return view("frontend/Industry/gaming");
    }
    public function homeInterior()
    {
        return view("frontend/Industry/homeInterior");
    }
    public function automation()
    {
        return view("frontend/Industry/automation");
    }
}
