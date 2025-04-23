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
}
