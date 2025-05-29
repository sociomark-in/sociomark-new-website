<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkCultureController extends Controller
{
    public function index(){
        $meta = [
            'title' => 'Sociomark Work Culture | Digital Marketing in UAE​',
            'description' => "Learn about Sociomark’s friendly work culture at a digital marketing agency in UAE where teamwork and creativity boost client success."
        ];
        return view("Frontend/WorkCulture", compact('meta'));
    }
}
