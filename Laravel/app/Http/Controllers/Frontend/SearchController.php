<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Beachcourt;

class SearchController extends Controller
{
    public function show(Request $request)
    {   
    		$plz = $request->searchQuery;
    		require_once(app_path() . '/PLZ/ogdbPLZnearby2.lib.php');
    		require_once(app_path() . '/PLZ/plzToCity.php');

    		$result = ($plzToCity[$plz]);
    		
    		dd($result);

    		if (isset($plzToCity[$plz])) {
						var_dump($plzToCity[$plz]);
					} else {
						echo 'Nicht gefunden';
					}

       	

        $results = ogdbPLZnearby($plz,'10', true);

     		$beachcourts = Beachcourt::all();

        return view('frontend.search.show', compact('results', 'beachcourts'));
    }
	    
}