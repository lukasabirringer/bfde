<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Beachcourt;
use App\Rating;
use App\Footernavigation;
use App\Favorites;
use DB;
use Auth;

class BeachcourtController extends Controller
{

    public function index()
    {

            $footernavigations = Footernavigation::limit(5)->get();
            $beachcourts = Beachcourt::paginate(6);
            return view('frontend.beachcourts.index', ['beachcourts' => $beachcourts, 'footernavigations' => $footernavigations]);

    }
    public function show($name)
    {
       
        $beachcourt = Beachcourt::where('citySlug', $name)->first(); 
        $id = $beachcourt->id;

        $ratings = Rating::where('beachcourt_id', $id)->get();
        $footernavigations = Footernavigation::limit(5)->get();

        return view('frontend.beachcourts.show', compact('beachcourt', 'ratings', 'footernavigations'));
        
    }
    public function showstate($stateSlug)
    {
       
        $beachcourts = Beachcourt::where('stateSlug', $stateSlug)->paginate(15);

        return view('frontend.beachcourts.states', compact('beachcourts', 'stateSlug'));
        
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
