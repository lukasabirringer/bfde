<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('users')->insert(
            ['name' => $request->userName,
             'email' => $request->userEmail,
             'role' => $request->userRole, 
             'postalCode' => $request->postalCode, 
             'city' => $request->city, 
             'firstName' => $request->firstName, 
             'lastName' => $request->lastName, 
             'birthdate' => $request->birthdate, 
             'sex' => $request->sex, 
             'password' => bcrypt($request->userPass),
             ]
        );
    
        return redirect('/admin/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));  
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
        $name = $request->input('userName');
        $email = $request->input('userEmail');
        $role = $request->input('userRole');
        $postalCode = $request->input('postalCode');
        $city = $request->input('city');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $birthdate = $request->input('birthdate');
        $sex = $request->input('sex');

        $user = User::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->role = $role;
        $user->postalCode = $postalCode;
        $user->city = $city;
        $user->firstName = $firstName;
        $user->lastName = $lastName;
        $user->birthdate = $birthdate;
        $user->sex = $sex;
        $user->save();

        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin/user');
    }
}
