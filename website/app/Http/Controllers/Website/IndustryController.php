<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function home() {
        return view("Frontend/industry/home");
    }
    public function single($segment) {
        switch ($segment) {
            case 'education':
                return view("Frontend/industry/education_industry");
                # code...
                break;
            case 'healthcare':
                return view("Frontend/industry/healthcare_industry");
                # code...
                break;
            case 'fmcg':
                return view("Frontend/industry/fmcg_industry");
                # code...
                break;
            case 'news-media':
                return view("Frontend/industry/news_and_media_industry");
                # code...
                break;
            case 'real-estate':
                return view("Frontend/industry/realestate_industry");
                # code...
                break;
            case 'logistics':
                return view("Frontend/industry/logistics_industry");
                # code...
                break;
            case 'fashion':
                return view("Frontend/industry/fashion_and_lifestyle_industry");
                # code...
                break;
            case 'gaming':
                return view("Frontend/industry/gaming_industry");
                # code...
                break;
            case 'home-interior':
                return view("Frontend/industry/interior_industry");
                # code...
                break;
            case 'automobile':
                return view("Frontend/industry/automobile_industry");
                # code...
                break;
            case 'travel':
                return view("Frontend/industry/travel_industry");
                # code...
                break;
            case 'b2b':
                return view("Frontend/industry/b2b_industry");
                # code...
                break;
            case 'public':
                return view("Frontend/industry/public_sector");
                # code...
                break;

            default:
                # code...
                break;
        }
    }
}
