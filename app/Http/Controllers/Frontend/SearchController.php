<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Beachcourt;
use DB;
use PragmaRX\ZipCode\ZipCode;

class SearchController extends Controller
{

    public function show(Request $request) {

        $query = $request->searchquery;

        $zipcode = new ZipCode();
        $result = $zipcode->setCountry('DE');
        $result = $zipcode->find($query);
     
        $address = $result->addresses;

        $place = $address["0"]["place"];
        $lng = (float)$address["0"]["longitude"];
        $lat = (float)$address["0"]["latitude"];
        $circle_radius = 3959;
        $max_distance = 1200;
        //$beachcourts = Beachcourt::all();
        $beachcourts = DB::select(
           'SELECT * FROM
                (SELECT id, courtName, city, latitude, longitude, (' . $circle_radius . ' * acos(cos(radians(' . $lat . ')) * cos(radians(latitude)) *
                cos(radians(longitude) - radians(' . $lng . ')) +
                sin(radians(' . $lat . ')) * sin(radians(latitude))))
                AS distance
                FROM beachcourts) AS distance
            WHERE distance < ' . $max_distance . '
            ORDER BY distance
            LIMIT 20;
        ');
        return view('frontend.search.show', compact('beachcourts', 'query', 'place'));
    }
	    
}