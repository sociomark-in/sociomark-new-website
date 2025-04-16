<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index(){
        return view('frontend/caseStudy/case-study');
    }
}
