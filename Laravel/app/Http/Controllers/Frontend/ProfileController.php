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
    public function update(Request $request){

        $user = Auth::user();
        $user->name = $request->input('newName');
        $user->firstName = $request->input('newVorname');
        $user->lastName = $request->input('newNachname');
        $user->email = $request->input('newEmail');
        $user->password = $request->input('newPasswort');
        $user->postalCode = $request->input('newNPLZ');
        $user->city = $request->input('newWohnort');
        $user->birthdate = $request->input('newGeburtstag');
     
        $user->save();

        return back();
    }
    
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

            $path = url('uploads/profilePictures/' . auth()->id() . '/');
            
         
            if (!file_exists($path)) {
                 File::makeDirectory($path, 0777, true, true);
            }
            $path = public_path('uploads/profilePictures/' . auth()->id() . '/' . $filename);
            //http://image.intervention.io/api/resize

            Image::make($avatar)->resize(600, null, function ($constraint) {$constraint->aspectRatio();})->save(public_path('uploads/profilePictures/' . auth()->id() . '/' . $filename));

            $user = Auth::user();
            $user->pictureName = $filename;
            $user->save();
        }

        return back();

    }

    public function destroy()
    {
        $user = Auth::user();
        $filename = $user->pictureName;
        $user->pictureName = null;
        $user->save();
        $file = public_path('uploads/profilePictures/' . auth()->id() . '/' . $filename);
     
        File::delete($file);
       
        return back();
    }

    public function confirmRegistration($confirmationCode)
        {
            //dd($confirmationCode);
            if( ! $confirmationCode)
            {
                echo "fail code";
            }
            $user = User::where('confirmation_code', $confirmationCode)->firstOrFail();

            if ( ! $user)
            {
                echo "fail user";
            }

            $user->confirmed = 1;
            $user->confirmation_code = null;
            $user->pictureName = 'placeholder-user.png';
            $user->save();
            
            $path = url('uploads/profilePictures/' . auth()->id() . '/');

            File::makeDirectory($path, 0777, true, true);
         
            File::copy(public_path('uploads/profilePictures/fallback/placeholder-user.png'),public_path('uploads/profilePictures/' . auth()->id() . '/placeholder-user.png'));

            return back();
        }
        
    }
