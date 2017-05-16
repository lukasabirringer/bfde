<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Beachcourt;
use DB;

class HomepageController extends Controller
{
    public function show()
    {
        return view('welcome');  
    }
}
