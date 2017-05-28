<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Beachcourt;
use DB;
use App\Footernavigation;

class HomepageController extends Controller
{
    public function show()
    {
    		$footernavigations = Footernavigation::limit(5)->get();
    		$beachcourts = Beachcourt::limit(5)->get();
        return view('frontend.homepage', compact('footernavigations', 'beachcourts'));  
    }
}