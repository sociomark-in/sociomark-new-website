<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class calenderController extends Controller
{
    public function calender(){
        return view('admin/Pages/calender/calender');
    }
}
