<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkCultureController extends Controller
{
    public function index(){
        $meta = [
            'title' => 'Our Work Culture: Where Deadlines Meet Dance Breaks​',
            'description' => "Get a glimpse of Sociomark's vibrant work culture where creativity thrives, collaboration is key, and innovation drives success in every digital marketing campaign."
        ];
        return view("Frontend/WorkCulture", compact('meta'));
    }
}
