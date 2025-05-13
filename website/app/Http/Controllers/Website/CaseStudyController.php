<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Digital Marketing Case Studies | Proven Results by Sociomark​​',
            'description' => "Our case studies showcase the innovative ideas and strategies that have transformed brands into highly successful and profitable campaigns."
        ];
        return view('Frontend/caseStudy/case-study', compact('meta'));
    }
    public function stemrxbio()
    {
        return view('Frontend/caseStudy/stemrxbio');
    }
    public function expert4travel()
    {
        return view('Frontend/caseStudy/expert4travel');
    }
    public function theProfessionalCouriers()
    {
        return view('Frontend/caseStudy/theProfessionalCouriers');
    }
    public function eduauraa()
    {
        return view('Frontend/caseStudy/eduauraa');
    }
    public function shahenaz()
    {
        return view('Frontend/caseStudy/shahenaz');
    }
    public function okinawascooters()
    {
        return view('Frontend/caseStudy/okinawascooters');
    }
    public function ayushakti()
    {
        return view('Frontend/caseStudy/ayushakti');
    }
    public function lime()
    {
        return view('Frontend/caseStudy/lime');
    }
    public function nodwinGaming()
    {
        return view('Frontend/caseStudy/nodwinGaming');
    }
    public function buttondabaodeshbanao()
    {
        return view('Frontend/caseStudy/buttondabaodeshbanao');
    }
    public function roadtosafetyinitiative()
    {
        return view('Frontend/caseStudy/roadtosafetyinitiative');
    }
    public function acetattoz()
    {
        return view('Frontend/caseStudy/acetattoz');
    }
    public function smarterIndia()
    {
        return view('Frontend/caseStudy/smarterIndia');
    }
    public function realestateawards()
    {
        return view('Frontend/caseStudy/realestateawards');
    }
    public function nhs()
    {
        return view('Frontend/caseStudy/nhs');
    }
    public function getTheHook()
    {
        return view('Frontend/caseStudy/getTheHook');
    }
    public function ayushaktiNew()
    {
        return view('Frontend/caseStudy/ayushaktiNew');
    }
    public function cyberPower()
    {
        return view('Frontend/caseStudy/cyberPower');
    }
}
