<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('Frontend/Portfolio/ListPortfolioCat');
    }
    public function portfolioInside()
    {
        return view('Frontend/Portfolio/insidePortfolio');
    }
    public function euro()
    {
        return view('Frontend/Portfolio/euroSocialMedia');
    }
    public function bumchumps()
    {
        return view('Frontend/Portfolio/bumchumpsSocialMedia');
    }
    public function jivana()
    {
        return view('Frontend/Portfolio/jivanaSocialMedia');
    }
    public function roadToSafety()
    {
        return view('Frontend/Portfolio/roadToSafetySocialMedia');
    }
    public function nodwin()
    {
        return view('Frontend/Portfolio/nodwinSocialMedia');
    }
    public function lime()
    {
        return view('Frontend/Portfolio/limeSocialMedia');
    }
    public function castrol()
    {
        return view('Frontend/Portfolio/castrolSocialMedia');
    }
    public function missionInsureIndia()
    {
        return view('Frontend/Portfolio/missionInsureIndiaSocialMedia');
    }
    public function realEstateAward()
    {
        return view('Frontend/Portfolio/realEstateAwardSocialMedia');
    }
    public function cosplayGenie()
    {
        return view('Frontend/Portfolio/cosplayGenieSocialMedia');
    }
    public function smartCityOfIndia()
    {
        return view('Frontend/Portfolio/smartCityOfIndiaSocialMedia');
    }
    public function buttonbabaoDeshBanao()
    {
        return view('Frontend/Portfolio/buttonbabaoDeshBanaoSocialMedia');
    }
    public function mahidraFirstChoice()
    {
        return view('Frontend/Portfolio/mahidraFirstChoiceSocialMedia');
    }
    public function theProffessionalCouriers()
    {
        return view('Frontend/Portfolio/theProffessionalCouriersSocialMedia');
    }
    public function teamCashlessIndia()
    {
        return view('Frontend/Portfolio/teamCashlessIndiaSocialMedia');
    }
    public function sportzConsult()
    {
        return view('Frontend/Portfolio/sportzConsultSocialMedia');
    }
    public function ayushaktisocoialM()
    {
        return view('Frontend/Portfolio/ayushaktiSocialMedia');
    }
    public function aiawards()
    {
        return view('Frontend/Portfolio/aiawards');
    }
    public function smarterindia()
    {
        return view('Frontend/Portfolio/smarterindiaSocialMedia');
    }
    public function grillbox()
    {
        return view('Frontend/Portfolio/grillboxSocialMedia');
    }
    public function kolkatarolls()
    {
        return view('Frontend/Portfolio/kolkatarollsSocialMedia');
    }
    public function hollywoodopticians()
    {
        return view('Frontend/Portfolio/hollywoodopticiansSocialMedia');
    }
    public function foresightopticals()
    {
        return view('Frontend/Portfolio/foresightopticalsSocialMedia');
    }
    public function inifdvashi()
    {
        return view('Frontend/Portfolio/inifdvashiSocialMedia');
    }
    public function profinet()
    {
        return view('Frontend/Portfolio/profinetbranding');
    }
    public function ayushaktiweb()
    {
        return view('Frontend/Portfolio/ayushaktiweb');
    }
    public function electrocareweb()
    {
        return view('Frontend/Portfolio/electrocareweb');
    }
    public function offthehookgrabandgo()
    {
        return view('Frontend/Portfolio/offthehookgrabandgoweb');
    }
    public function offthehooknanaimo()
    {
        return view('Frontend/Portfolio/offthehooknanaimoweb');
    }
    public function barebonesfishhouse()
    {
        return view('Frontend/Portfolio/barebonesfishhouseweb');
    }
    public function kinnaltoys()
    {
        return view('Frontend/Portfolio/kinnaltoysweb');
    }
    public function trollerfishandchips()
    {
        return view('Frontend/Portfolio/trollerfishandchipsweb');
    }
    public function limeweb()
    {
        return view('Frontend/Portfolio/limeweb');
    }
    public function ayushaktiusaweb()
    {
        return view('Frontend/Portfolio/ayushaktiusaweb');
    }
    public function drsmitanaramweb()
    {
        return view('Frontend/Portfolio/drsmitanaramweb');
    }
    public function realEAweb()
    {
        return view('Frontend/Portfolio/realEAweb');
    }
    public function portraitureByPariWeb()
    {
        return view('Frontend/Portfolio/portraitureByPariWeb');
    }
    public function profinetWeb()
    {
        return view('Frontend/Portfolio/profinetWeb');
    }
    public function aainosWeb()
    {
        return view('Frontend/Portfolio/aainosWeb');
    }
    public function hollywoodOpticiansBranding()
    {
        return view('Frontend/Portfolio/hollywoodOpticiansBranding');
    }
    public function foresightOpticalsBranding()
    {
        return view('Frontend/Portfolio/foresightOpticalsBranding');
    }




    public function social($segment)
    {
        switch ($segment) {
            case 'bulid-track':
                return view("Frontend/Portfolio/bulidTrackSocial");
                # code...
                break;
            case 'bem':
                return view("Frontend/Portfolio/bemSocial");
                # code...
                break;
            case 'ayu-health':
                return view("Frontend/Portfolio/ayuHealthSocial");
                # code...
                break;
            case 'cyber-power':
                return view("Frontend/Portfolio/cyberPowerSocial");
                # code...
                break;
            case 'dy-patil':
                return view("Frontend/Portfolio/dyPatilSocial");
                # code...
                break;
            case 'expert-4-travel':
                return view("Frontend/Portfolio/expert4travelSocial");
                # code...
                break;
            case 'inifd':
                return view("Frontend/Portfolio/inifdSocial");
                # code...
                break;
            case 'ism':
                return view("Frontend/Portfolio/ismSocial");
                # code...
                break;
            case 'm4u':
                return view("Frontend/Portfolio/m4uSocial");
                # code...
                break;
            case 'network18':
                return view("Frontend/Portfolio/network18Social");
                # code...
                break;
            case 'nhss':
                return view("Frontend/Portfolio/nhssSocial");
                # code...
                break;
            case 'nmmc':
                return view("Frontend/Portfolio/nmmcSocial");
                # code...
                break;

            case 'nodwin':
                return view("Frontend/Portfolio/nodwinSocial");
                # code...
                break;

            case 'okinawa':
                return view("Frontend/Portfolio/okinawaSocial");
                # code...
                break;

            case 'patankar-farm':
                return view("Frontend/Portfolio/patankarFarmSocial");
                # code...
                break;

            case 'qubero':
                return view("Frontend/Portfolio/quberoSocial");
                # code...
                break;


            case 'repute':
                return view("Frontend/Portfolio/reputeSocial");
                # code...
                break;

            case 'shahenaz':
                return view("Frontend/Portfolio/shahenazSocial");
                # code...
                break;

            case 'stem-RX-bio-science':
                return view("Frontend/Portfolio/stemRXBioScience");
                # code...
                break;
            case 'tata-play':
                return view("Frontend/Portfolio/tataplaySocial");
                # code...
                break;
            case 'tmc':
                return view("Frontend/Portfolio/tmcSocial");
                # code...
                break;
            case 'tpc':
                return view("Frontend/Portfolio/tpcSocial");
                # code...
                break;
            case 'watch':
                return view("Frontend/Portfolio/watchSocial");
                # code...
                break;
            case 'world-grad':
                return view("Frontend/Portfolio/worldGradSocial");

                break;
            case 'pare':
                return view("Frontend/Portfolio/pareSocial");

                break;

            default:
                # code...
                break;
        }
    }
}
