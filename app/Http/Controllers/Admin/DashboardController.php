<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Submittedbeachcourt;

class DashboardController extends Controller
{
    public function show()
    {
        $subs = Submittedbeachcourt::limit(5)->latest()->get();
        return view('admin.dashboard', compact('subs'));  
    }
}