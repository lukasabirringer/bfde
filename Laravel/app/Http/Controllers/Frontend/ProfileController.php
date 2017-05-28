<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Favorites;
use DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($id)
    {
    		$authenticated_id = Auth::id();
  
    		if($id == $authenticated_id){
        		
        		$profile = User::findOrFail($id);
                
                $myFavorites = Auth::user()->favorites;
                // dd($myFavorites);
        		return view('frontend.profile.show', compact('profile', 'myFavorites')); 

    		} else {

        		echo 'Dies ist nicht dein Profil';
        	
  			};
    }
}
