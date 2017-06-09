<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Beachcourt;
use App\Rating;
use App\Footernavigation;
use DB;
use Auth;

class BeachcourtController extends Controller
{
   
    public function index()
    {
        
            $footernavigations = Footernavigation::limit(5)->get();
            $beachcourts = Beachcourt::paginate(15);
            return view('frontend.beachcourts.index', ['beachcourts' => $beachcourts, 'footernavigations' => $footernavigations]);
        
    }
    
    public function show($id)
    {
        {
        $beachcourt = Beachcourt::findOrFail($id);
        $ratings = Rating::where('beachcourt_id', $id)->get();
        $footernavigations = Footernavigation::limit(5)->get();
        
        return view('frontend.beachcourts.show', compact('beachcourt', 'ratings', 'footernavigations')); 
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
