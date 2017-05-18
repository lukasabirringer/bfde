<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Beachcourt;
use App\Rating;

class RatingController extends Controller
{
    public function store(Request $request)
        { 
            //VIEL ZU KOMPLIZIERT --- MUSS VEREINFACHT WERDEN
            //!!!!!!!!!!!!!
            
            // Daten der Form von beachcourts/list.blade.php die in $requests liegen in Variablen speichern 
            $beachcourtid = $request->beachcourtname;
            $sandqualitaet = $request->sandquali;
            $sicherheit = $request->sicherheit;
            $netzqualitaet = $request->netzquali;
            $sonnenqualitaet = $request->sonnenquali;
            $luftqualitaet = $request->luftquali;

            // beachcourt anhand der übergebenen beachcourt-Variable übergeben
            $beachcourt = Beachcourt::where('id', $beachcourtid)->first(); 

            //Rating in der ratings-tabelle speichern inkl. dem forgein-key der beachcourt-variable
            $newRating = $beachcourt->ratings()->create([
                'k1_sandqualitaet' => $sandqualitaet, 
                'k2_sicherheit' => $sicherheit,
                'k3_netzqualitaet' => $netzqualitaet,
                'k4_sonnenqualitaet' => $sonnenqualitaet,
                'k5_luftqualitaet' => $luftqualitaet,
            ]);
            
            //$beachcourt gibt den entsprechenden court zurück(s.o.); 
            // Dann wird der Durchschnitt des entsprechenden ratings zu diesem court errechnet und in einer Variablen gespeichert
      $sandqualitaetaverage = $beachcourt->ratings()->avg('k1_sandqualitaet');
      $sicherheitaverage = $beachcourt->ratings()->avg('k2_sicherheit');
      $netzqualitaetaverage = $beachcourt->ratings()->avg('k3_netzqualitaet');
      $sonnenqualitaetaverage = $beachcourt->ratings()->avg('k4_sonnenqualitaet');
      $luftqualitaetaverage = $beachcourt->ratings()->avg('k5_luftqualitaet');

      //Das neue Rating wird ausgerechnet
            $newRating = ($sandqualitaetaverage + $sicherheitaverage + $netzqualitaetaverage + $sonnenqualitaetaverage + $luftqualitaetaverage)/5;

            // Das neue Rating wird gespeichert
            DB::table('beachcourts')->where('id', $beachcourtid)->update(['realRating' => $newRating]);

            // Der ratingCount wird um 1 erhöht (wichtig um zu sehen ob die User-Bewertungen in Kraft treten kann)
            DB::table('beachcourts')->where('id', $beachcourtid)->increment('ratingCount');

          return back();
        }
}