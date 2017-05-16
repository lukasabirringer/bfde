<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Beachcourt;
use DB;

class BeachcourtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beachcourts = Beachcourt::all();
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
        DB::table('beachcourts')->insert(
            ['courtName' => $request->courtName,
             'city' => $request->city,]
        );
    
        return redirect('/admin/beachcourts/');
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
        $name = $request->input('courtName');

        $beachcourt = Beachcourt::find($id);
        $beachcourt->courtName = $name;
        $beachcourt->save();

        return redirect('/admin/beachcourts');
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
        return redirect('/admin/beachcourts');
    }
}
