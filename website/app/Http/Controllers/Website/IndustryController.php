<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function education()
    {
        return view("Frontend/Industry/education");
    }
    public function healthcare()
    {
        return view("Frontend/Industry/healthcare");
    }
    public function FMCG()
    {
        return view("Frontend/Industry/FMCG");
    }
    public function newsMedia()
    {
        return view("Frontend/Industry/newsMedia");
    }
    public function realEstate()
    {
        return view("Frontend/Industry/realEstate");
    }
    public function logistics()
    {
        return view("Frontend/Industry/logistics");
    }
    public function fashionLifestyle()
    {
        return view("Frontend/Industry/fashionLifestyle");
    }
    public function gaming()
    {
        return view("Frontend/Industry/gaming");
    }
    public function homeInterior()
    {
        return view("Frontend/Industry/homeInterior");
    }
    public function automation()
    {
        return view("Frontend/Industry/automation");
    }
}
