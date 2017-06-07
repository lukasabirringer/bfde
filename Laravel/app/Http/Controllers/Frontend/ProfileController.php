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

class ProfileController extends Controller
{
    public function show($id)
    {
            $authenticated_id = Auth::id();

            if($id == $authenticated_id){
                
                $profile = User::findOrFail($id);
                $filename = $profile->pictureName;
                $directory = ('profilePictures/' . auth()->id() . '/');
                $profilepicture = auth()->id() . '/' . $filename;
                //dd($profilepicture);
                $myFavorites = Auth::user()->favorites;
                // dd($myFavorites);
                $footernavigations = Footernavigation::limit(5)->get();
                return view('frontend.profile.show', compact('profile', 'myFavorites', 'profilepicture', 'footernavigations')); 

            } else {

                echo 'Dies ist nicht dein Profil';
            
            };
    }
    public function storeimage(Request $request){

        if ($request->hasFile('profilePicture')) {
            $avatar = request()->file('profilePicture');
            $dt = Carbon::now();
            $current = $dt->toDateTimeString(); 
            $current = str_replace([':', ' '], '-', $current);
            $filename = $current . '-' . request()->user()->id . '.' . $avatar->extension();

            $path = public_path('uploads/profilePictures/' . auth()->id() . '/');
         
            if (!file_exists($path)) {
                 File::makeDirectory($path, 0777, true);
            }
            //http://image.intervention.io/api/resize
            Image::make($avatar)->resize(300, null, function ($constraint) {$constraint->aspectRatio();})->save(public_path('uploads/profilePictures/' . auth()->id() . '/' . $filename));

            $user = Auth::user();
            $user->pictureName = $filename;
            $user->save();
        }

        return back();

        }
        
    }
