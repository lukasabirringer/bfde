<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Beachcourt;
use App\Rating;
use DB;

class BeachcourtController extends Controller
{
   
    public function index()
    {
        {
            $beachcourts = Beachcourt::all();
            
            return view('frontend.beachcourts.index', ['beachcourts' => $beachcourts]);
        }
    }

    
    public function show($id)
    {
        {
        $beachcourt = Beachcourt::findOrFail($id);
        $ratings = Rating::where('beachcourt_id', $id)->get();
        
        return view('frontend.beachcourts.show', compact('beachcourt', 'ratings')); 
        }
    }
    
}
