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
    public function eduauraa(){
        return view('frontend/caseStudy/eduauraa');
    }
    public function shahenaz(){
        return view('frontend/caseStudy/shahenaz');
    }
    public function okinawascooters(){
        return view('frontend/caseStudy/okinawascooters');
    }
    public function ayushakti(){
        return view('frontend/caseStudy/ayushakti');
    }
    public function lime(){
        return view('frontend/caseStudy/lime');
    }
    public function nodwinGaming(){
        return view('frontend/caseStudy/nodwinGaming');
    }
    public function buttondabaodeshbanao(){
        return view('frontend/caseStudy/buttondabaodeshbanao');
    }
    public function roadtosafetyinitiative(){
        return view('frontend/caseStudy/roadtosafetyinitiative');
    }
    public function acetattoz(){
        return view('frontend/caseStudy/acetattoz');
    }
    public function smarterIndia(){
        return view('frontend/caseStudy/smarterIndia');
    }
    public function realestateawards(){
        return view('frontend/caseStudy/realestateawards');
    }
    
}

