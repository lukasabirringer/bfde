<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($id)
    {
    		$authenticated_id = Auth::id();
  
    		if($id == $authenticated_id){
        		
        		$profile = User::findOrFail($id);
        
        		return view('frontend.profile.show', compact('profile')); 

    		} else {

        		echo 'Dies ist nicht dein Profil';
        	
  			};
    }
}
