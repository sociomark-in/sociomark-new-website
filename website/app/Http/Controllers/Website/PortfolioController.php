<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $meta = [
            'title' => 'Creative Journey: Explore the Work That Speaks for Itself​',
            'description' => "Explore Sociomark's portfolio showcasing innovative digital marketing, branding, and web development projects that deliver impactful results for clients."
        ];
        return view('Frontend/Portfolio/insidePortfolio', compact('meta'));
        // return view('Frontend/Portfolio/ListPortfolioCat');
    }
    public function portfolioInside()
    {
        return view('Frontend/Portfolio/insidePortfolio');
    }

    public function social_media($client)
    {
        switch ($client) {
        /* A */
            case 'ai-awards':
                return view('Frontend/Portfolio/aiawards');
                # code...
                break;
            case 'adi-arogyam':
                return view("Frontend/Portfolio/adiArogyamSocial");
                # code...
                break;
            case 'ayu-health':
                return view("Frontend/Portfolio/ayuHealthSocial");
                # code...
                break;
            case 'ayushakti':
                return view('Frontend/Portfolio/ayushaktiSocialMedia');
                # code...
                break;
        /* B */
            case 'bulid-track':
                return view("Frontend/Portfolio/bulidTrackSocial");
                # code...
                break;
            case 'button-dabao-desh-banao':
                return view('Frontend/Portfolio/buttonbabaoDeshBanaoSocialMedia');
                # code...
                break;
            case 'bumchumps':
                return view('Frontend/Portfolio/bumchumpsSocialMedia');
                # code...
                break;
            case 'bem':
                return view("Frontend/Portfolio/bemSocial");
                # code...
                break;
        /* C */
            case 'castrol':
                return view('Frontend/Portfolio/castrolSocialMedia');
                # code...
                break;
            case 'cosplay-genie':
                return view('Frontend/Portfolio/cosplayGenieSocialMedia');
                # code...
                break;
            case 'cyber-power':
                return view("Frontend/Portfolio/cyberPowerSocial");
                # code...
                break;
        /* D */
            case 'desi-avtar':
                return view("Frontend/Portfolio/desiAvtar");
                # code...
                break;
            case 'dy-patil':
                return view("Frontend/Portfolio/dyPatilSocial");
                # code...
                break;
        /* E */
            case 'euro':
                return view('Frontend/Portfolio/euroSocialMedia');
                # code...
                break;
            case 'expert-4-travel':
                return view("Frontend/Portfolio/expert4travelSocial");
                # code...
                break;
        /* F */
            case 'sight-optiforecals':
                return view('Frontend/Portfolio/foresightopticalsSocialMedia');
                break;
        /* G */
            case 'grill-box':
                return view('Frontend/Portfolio/grillboxSocialMedia');
                # code...
                break;
        /* H */
            case 'hollywood-opticians':
                return view('Frontend/Portfolio/hollywoodopticiansSocialMedia');
                break;
        /* I */
            case 'inifd-vashi':
                return view('Frontend/Portfolio/inifdvashiSocialMedia');
                break;
            case 'ism':
                return view("Frontend/Portfolio/ismSocial");
                # code...
                break;
        /* J */
            case 'jivana':
                return view('Frontend/Portfolio/jivanaSocialMedia');
                # code...
                break;
            case 'jop':
                return view("Frontend/Portfolio/jopSocial");
                # code...
                break;
        /* K */
            case 'kolkata-rolls':
                return view('Frontend/Portfolio/kolkatarollsSocialMedia');
                # code...
                break;
        /* L */
            case 'lime':
                return view('Frontend/Portfolio/limeSocialMedia');
                # code...
                break;
        /* M */
            case 'mahindra-first-choice-services':
                return view('Frontend/Portfolio/mahidraFirstChoiceSocialMedia');
                # code...
                break;
            case 'm4u':
                return view("Frontend/Portfolio/m4uSocial");
                # code...
                break;
            case 'mission-insure-india':
                return view('Frontend/Portfolio/missionInsureIndiaSocialMedia');
                # code...
                break;
        /* N */
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
            case 'nodwin-gaming':
                // return view("Frontend/Portfolio/nodwinSocial");
                return view("Frontend/Portfolio/nodwinSocialMedia");
                # code...
                break;
        /* O */
            case 'okinawa':
                return view("Frontend/Portfolio/okinawaSocial");
                # code...
                break;
        /* P */
            case 'pare':
                return view("Frontend/Portfolio/pareSocial");
                break;
            case 'patankar-farm':
                return view("Frontend/Portfolio/patankarFarmSocial");
                # code...
                break;
        /* Q */
            case 'qubero':
                return view("Frontend/Portfolio/quberoSocial");
                # code...
                break;
        /* R */
            case 'real-estate-awards':
                return view('Frontend/Portfolio/realEstateAwardSocialMedia');
                # code...
                break;
            case 'repute':
                return view("Frontend/Portfolio/reputeSocial");
                # code...
                break;
            case 'road-to-safety':
                return view('Frontend/Portfolio/roadToSafetySocialMedia');
                # code...
                break;
        /* S */
            case 'shahenaz':
                return view("Frontend/Portfolio/shahenazSocial");
                # code...
                break;
            case 'smart-cities-of-india':
                return view('Frontend/Portfolio/smartCityOfIndiaSocialMedia');
                # code...
                break;
            case 'smarter-india':
                return view('Frontend/Portfolio/smarterindiaSocialMedia');
                # code...
                break;
            case 'sportz-consult':
                return view('Frontend/Portfolio/sportzConsultSocialMedia');
                # code...
                break;
            case 'stemrxbio':
            case 'stemrx-bioscience':
                return view("Frontend/Portfolio/stemRXBioScience");
                # code...
                break;
        /* T */
            case 'tata-play':
                return view("Frontend/Portfolio/tataplaySocial");
                # code...
                break;
            case 'team-cashless-india':
                return view('Frontend/Portfolio/teamCashlessIndiaSocialMedia');
                # code...
                break;
            case 'the-professional-couriers':
                return view('Frontend/Portfolio/theProffessionalCouriersSocialMedia');
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
        /* U */
        /* V */
            case 'vedco':
                return view("Frontend/Portfolio/vedcoSocial");
                # code...
                break;
        /* W */
            case 'watch':
                return view("Frontend/Portfolio/watchSocial");
                # code...
                break;
            case 'world-grad':
                return view("Frontend/Portfolio/worldGradSocial");
                break;

            default:
                # code...
                break;
        }
    }

    public function branding_work($client)
    {
        switch ($client) {
            case 'profinet':
                return view('Frontend/Portfolio/profinetbranding');
                break;
            case 'hollywood-opticians':
                return view('Frontend/Portfolio/hollywoodOpticiansBranding');
                break;
            case 'foresight-opticals':
                return view('Frontend/Portfolio/foresightOpticalsBranding');
                break;

            default:
                # code...
                break;
        }
    }

    public function website_work($client)
    {
        switch ($client) {
            case 'ayushakti':
                return view('Frontend/Portfolio/ayushaktiweb');
                break;
            case 'electrocare':
                return view('Frontend/Portfolio/electrocareweb');
                break;
            case 'offthehookgrabandgo':
                return view('Frontend/Portfolio/offthehookgrabandgoweb');
                break;
            case 'offthehooknanaimo':
                return view('Frontend/Portfolio/offthehooknanaimoweb');
                break;
            case 'barebonesfishhouse':
                return view('Frontend/Portfolio/barebonesfishhouseweb');
                break;
            case 'kinnaltoys':
                return view('Frontend/Portfolio/kinnaltoysweb');
                break;
            case 'trollerfishandchips':
                return view('Frontend/Portfolio/trollerfishandchipsweb');
                break;
            case 'lime':
                return view('Frontend/Portfolio/limeweb');
                break;
            case 'ayushakti-usa':
                return view('Frontend/Portfolio/ayushaktiusaweb');
                break;
            case 'dr-smita-naram':
                return view('Frontend/Portfolio/drsmitanaramweb');
                break;
            case 'real-estate-awards':
                return view('Frontend/Portfolio/realEAweb');
                break;
            case 'portraiture-by-pari':
                return view('Frontend/Portfolio/portraitureByPariWeb');
                break;
            case 'profinet':
                return view('Frontend/Portfolio/profinetWeb');
                break;
            case 'aainos':
                return view('Frontend/Portfolio/aainosWeb');
                break;

            default:
                # code...
                break;
        }
    }
}
