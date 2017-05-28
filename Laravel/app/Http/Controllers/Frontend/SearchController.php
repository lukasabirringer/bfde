<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Beachcourt;

class SearchController extends Controller
{
    public function show(Request $request)
    {   
    		// dd($searchQuery);
    		require_once(app_path() . '/PLZ/ogdbPLZnearby2.lib.php');
       	$plz = $request->searchQuery;
       	//dd($plz);
        $results = ogdbPLZnearby($plz,'10', true);
     		$beachcourts = Beachcourt::all();
        //dd($results);
				// $results = collect($results);
 				
 			// 	$collection = $results->keyBy('zip');
 			// 	dd($collection);

        return view('frontend.search.show', compact('results', 'beachcourts'));
    }
	    
}