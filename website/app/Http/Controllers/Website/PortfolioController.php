<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('frontend/Portfolio/ListPortfolioCat');
    }
    public function portfolioInside(){
        return view('frontend/Portfolio/insidePortfolio');
    }
    public function euro(){
        return view('frontend/Portfolio/euroSocialMedia');
    }
    public function bumchumps(){
        return view('frontend/Portfolio/bumchumpsSocialMedia');
    }
    public function jivana(){
        return view('frontend/Portfolio/jivanaSocialMedia');
    }
    public function roadToSafety(){
        return view('frontend/Portfolio/roadToSafetySocialMedia');
    }
    public function nodwin(){
        return view('frontend/Portfolio/nodwinSocialMedia');
    }
    public function lime(){
        return view('frontend/Portfolio/limeSocialMedia');
    }
    public function castrol(){
        return view('frontend/Portfolio/castrolSocialMedia');
    }
    public function missionInsureIndia(){
        return view('frontend/Portfolio/missionInsureIndiaSocialMedia');
    }
    public function realEstateAward(){
        return view('frontend/Portfolio/realEstateAwardSocialMedia');
    }
    public function cosplayGenie(){
        return view('frontend/Portfolio/cosplayGenieSocialMedia');
    }
    public function smartCityOfIndia(){
        return view('frontend/Portfolio/smartCityOfIndiaSocialMedia');
    }
    public function buttonbabaoDeshBanao(){
        return view('frontend/Portfolio/buttonbabaoDeshBanaoSocialMedia');
    }
    public function mahidraFirstChoice(){
        return view('frontend/Portfolio/mahidraFirstChoiceSocialMedia');
    }
    public function theProffessionalCouriers(){
        return view('frontend/Portfolio/theProffessionalCouriersSocialMedia');
    }
    public function teamCashlessIndia(){
        return view('frontend/Portfolio/teamCashlessIndiaSocialMedia');
    }
    public function sportzConsult(){
        return view('frontend/Portfolio/sportzConsultSocialMedia');
    }
    public function ayushaktisocoialM(){
        return view('frontend/Portfolio/ayushaktiSocialMedia');
    }
}
