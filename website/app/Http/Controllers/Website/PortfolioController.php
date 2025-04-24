<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('Frontend/Portfolio/ListPortfolioCat');
    }
    public function portfolioInside(){
        return view('Frontend/Portfolio/insidePortfolio');
    }
    public function euro(){
        return view('Frontend/Portfolio/euroSocialMedia');
    }
    public function bumchumps(){
        return view('Frontend/Portfolio/bumchumpsSocialMedia');
    }
    public function jivana(){
        return view('Frontend/Portfolio/jivanaSocialMedia');
    }
    public function roadToSafety(){
        return view('Frontend/Portfolio/roadToSafetySocialMedia');
    }
    public function nodwin(){
        return view('Frontend/Portfolio/nodwinSocialMedia');
    }
    public function lime(){
        return view('Frontend/Portfolio/limeSocialMedia');
    }
    public function castrol(){
        return view('Frontend/Portfolio/castrolSocialMedia');
    }
    public function missionInsureIndia(){
        return view('Frontend/Portfolio/missionInsureIndiaSocialMedia');
    }
    public function realEstateAward(){
        return view('Frontend/Portfolio/realEstateAwardSocialMedia');
    }
    public function cosplayGenie(){
        return view('Frontend/Portfolio/cosplayGenieSocialMedia');
    }
    public function smartCityOfIndia(){
        return view('Frontend/Portfolio/smartCityOfIndiaSocialMedia');
    }
    public function buttonbabaoDeshBanao(){
        return view('Frontend/Portfolio/buttonbabaoDeshBanaoSocialMedia');
    }
    public function mahidraFirstChoice(){
        return view('Frontend/Portfolio/mahidraFirstChoiceSocialMedia');
    }
    public function theProffessionalCouriers(){
        return view('Frontend/Portfolio/theProffessionalCouriersSocialMedia');
    }
    public function teamCashlessIndia(){
        return view('Frontend/Portfolio/teamCashlessIndiaSocialMedia');
    }
    public function sportzConsult(){
        return view('Frontend/Portfolio/sportzConsultSocialMedia');
    }
    public function ayushaktisocoialM(){
        return view('Frontend/Portfolio/ayushaktiSocialMedia');
    }
}
