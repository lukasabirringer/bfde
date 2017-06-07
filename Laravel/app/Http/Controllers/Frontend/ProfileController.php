<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Favorites;
use App\Footernavigation;
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
                 $footernavigations = Footernavigation::limit(5)->get();
        		return view('frontend.profile.show', compact('profile', 'myFavorites', 'footernavigations')); 

    		} else {

        		echo 'Dies ist nicht dein Profil';
        	
  			};
    }
}