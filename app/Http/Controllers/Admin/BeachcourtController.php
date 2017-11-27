<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Beachcourt;
use DB;
use Carbon\Carbon;

class BeachcourtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beachcourts = Beachcourt::paginate(15);
        return view('admin.beachcourts.index', ['beachcourts' => $beachcourts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.beachcourts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $date = Carbon::now()->toDateTimeString();
     
        $sandQuality = $request->sandQuality;

        DB::table('beachcourts')->insert([
             'postalCode' => $request->postalCode,
             'city' => $request->city,
             'citySlug' => $request->city,
             'street' => $request->street,
             'houseNumber' => $request->houseNumber,
             'country' => $request->country,
             'state' => $request->state,
             'stateSlug' => $request->state,
             'latitude' => $request->latitude,
             'longitude' => $request->longitude,
             'operator' => $request->operator,
             'operatorURL' => $request->operatorURL,
             'chargeable' => $request->chargeable,
             'courtCountOutdoor' => $request->courtCountOutdoor,
             'courtCountIndoor' => $request->courtCountIndoor,
             'public' => $request->public
        ]);
   
        redirect('/admin/beachvolleyballfeld/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beachcourt = Beachcourt::findOrFail($id);
        return view('admin.beachcourts.show', compact('beachcourt'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beachcourt = Beachcourt::findOrFail($id);
        return view('admin.beachcourts.edit', compact('beachcourt'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postalCode = $request->input('postalCode');
        $city = $request->input('city');
        $citySlug = $request->input('city');
        $street = $request->input('street');
        $houseNumber = $request->input('houseNumber');
        $country = $request->input('country');
        $state = $request->input('state');
        $stateSlug = $request->input('stateSlug');
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $operator = $request->input('operator');
        $operatorURL = $request->input('operatorURL');
        $chargeable = $request->input('chargeable');
        $courtCountOutdoor = $request->input('courtCountOutdoor');
        $courtCountIndoor = $request->input('longicourtCountIndoorude');
        $public = $request->input('public');

        $beachcourt = Beachcourt::find($id);
        $beachcourt->postalCode = $postalCode;
        $beachcourt->city = $city;
        $beachcourt->citySlug = $citySlug;
        $beachcourt->street = $street;
        $beachcourt->houseNumber = $houseNumber;
        $beachcourt->country = $country;
        $beachcourt->state = $state;
        $beachcourt->stateSlug = $stateSlug;
        $beachcourt->latitude = $latitude;
        $beachcourt->longitude = $longitude;
        $beachcourt->operator = $operator;
        $beachcourt->operatorURL = $operatorURL;
        $beachcourt->chargeable = $chargeable;
        $beachcourt->courtCountOutdoor = $courtCountOutdoor;
        $beachcourt->courtCountIndoor = $courtCountIndoor;
        $beachcourt->public = $public;
        $beachcourt->save();

        return redirect('/admin/beachvolleyballfeld');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beachcourt = Beachcourt::findOrFail($id);
        $beachcourt->delete();
        return redirect('/admin/beachvolleyballfeld');
    }
}
