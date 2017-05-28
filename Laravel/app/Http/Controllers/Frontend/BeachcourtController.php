<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Beachcourt;
use App\Rating;
use DB;
use Auth;

class BeachcourtController extends Controller
{
   
    public function index()
    {
        
            $beachcourts = Beachcourt::paginate(15);
            
            return view('frontend.beachcourts.index', ['beachcourts' => $beachcourts]);
        
    }

    
    public function show($id)
    {
        {
        $beachcourt = Beachcourt::findOrFail($id);
        $ratings = Rating::where('beachcourt_id', $id)->get();
        
        return view('frontend.beachcourts.show', compact('beachcourt', 'ratings')); 
        }
    }

    public function favoriteBeachcourt(Beachcourt $beachcourt)
    {
        Auth::user()->favorites()->attach($beachcourt->id);

        return back();
    }

    public function unFavoriteBeachcourt(Beachcourt $beachcourt)
    {
        Auth::user()->favorites()->detach($beachcourt->id);

        return back();
    }

   
}
