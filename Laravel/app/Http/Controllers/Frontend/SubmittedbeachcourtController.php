<?php

namespace App\Http\Controllers\Frontend;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $userid = Auth::id();
        $date = Carbon::now()->toDateTimeString();
        DB::table('submittedbeachcourts')->insert(
            ['user_id' => $userid,
             'postalCode' => $request->postalCode,
             'city' => $request->city,
             'street' => $request->street,
             'houseNumber' => $request->houseNumber,
             'latitude' => $request->latitude,
             'longitude' => $request->longitude,
             'operator' => $request->operator,
             'operatorURL' => $request->operatorURL,
             'chargeable' => $request->chargeable,
             'notes' => $request->notes,
             'courtCountOutdoor' => $request->courtCountOutdoor,
             'courtCountIndoor' => $request->courtCountIndoor,
             'public' => $request->public,
             'submitState' => 'eingereicht',
             'created_at' => $date]
        );

        if ($request->hasFile('beachcourtPicture')) {

            $beachcourt = request()->file('beachcourtPicture');
            //dd($beachcourt);
            $dt = Carbon::now();
            $current = $dt->toDateTimeString(); 
            $current = str_replace([':', ' '], '-', $current);
            $filename = $current . '-' . request()->user()->id . '.' . $beachcourt->extension();

            $path = url('uploads/beachcourts/' . auth()->id() . '/');
            
         
            if (!file_exists($path)) {
                 File::makeDirectory($path, 0777, true, true);
            }
            $path = public_path('uploads/beachcourts/' . auth()->id() . '/' . $filename);
            //http://image.intervention.io/api/resize

            //Image::make($beachcourt)->resize(600, null, function ($constraint) {$constraint->aspectRatio();})->save(public_path('uploads/beachcourts/' . auth()->id() . '/' . $filename));
         
            //$path = public_path('img/products/'.$filename);
            Image::make($beachcourt->getRealPath())->resize(468, 249)->save($path);

            $beachcourtsubmit = Beachcourtsubmit::first();

            $beachcourtsubmit->picturePath = $filename;
            $beachcourtsubmit->save();
        }

        $request->session()->flash(
                            'alert-success', 
                            'Dein Beachfeld wurde erfolgreich eingereicht! Danke :)'
                            );
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beachcourtsubmit = Submittedbeachcourt::findOrFail($id);
        $beachcourtsubmit->delete();
        return back();
    }
}
