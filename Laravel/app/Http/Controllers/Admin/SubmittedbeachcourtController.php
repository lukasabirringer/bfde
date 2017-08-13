<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Favorites;
use App\Footernavigation;
use DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Storage;
use File;
use Image;
use App\Submittedbeachcourt;

class SubmittedbeachcourtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				$beachcourts = Submittedbeachcourt::paginate(15);
        return view('admin.submittedbeachcourts.index', ['beachcourts' => $beachcourts]);
    }
    public function show($id)
    {
        $beachcourt = Submittedbeachcourt::findOrFail($id);
        return view('admin.submittedbeachcourts.show', compact('beachcourt'));  
    }
    public function edit($id)
    {
        $beachcourt = Submittedbeachcourt::findOrFail($id);
        return view('admin.submittedbeachcourts.edit', compact('beachcourt'));  
    }
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

        $beachcourt = Submittedbeachcourt::find($id);
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

        return redirect('/admin/eingereichte-beachvolleyballfelder');
    }
    public function destroy($id)
    {
        $beachcourt = Submittedbeachcourt::findOrFail($id);
        $beachcourt->delete();
        return redirect('/admin/eingereichte-beachvolleyballfelder');
    }
}
