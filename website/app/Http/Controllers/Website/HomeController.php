<?php

namespace App\Http\Controllers\Website; // Correct namespace

use App\Http\Controllers\Controller; // Make sure you extend the base Controller

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        return view("Frontend/Home");
    }
    public function About(){
        return view("Frontend/AboutUs");
    }
    public function Services(){
        return view("Frontend/Services");
    }

   
}
