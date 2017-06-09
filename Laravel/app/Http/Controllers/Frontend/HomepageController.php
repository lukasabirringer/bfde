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
    		$beachcourts = Beachcourt::limit(3)->latest()->get();
        return view('frontend.homepage', compact('beachcourts'));  
    }
}