<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index(){
        return view('frontend/caseStudy/case-study');
    }
    public function stemrxbio(){
        return view('frontend/caseStudy/stemrxbio');
    }
    public function expert4travel(){
        return view('frontend/caseStudy/expert4travel');
    }
    public function theProfessionalCouriers(){
        return view('frontend/caseStudy/theProfessionalCouriers');
    }
}
