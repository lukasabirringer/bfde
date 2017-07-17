<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect('/')->with('status', 'Wir haben dir eine E-Mail geschickt! Zur Bestätigung deines Profils musst du einfach den Link in dieser anklicken und auf der Seite anmelden. Viel Spaß wünscht dir beachfelder.de!');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
   
        $code = str_random(30);
        $confirmation_code = ['foo' => $code];
        $email = $data['email'];
        $name = $data['name'];
   
        Mail::send('email.verify', $confirmation_code, function($message) use ($email, $name) {
            $message->to($email, $name)->subject('beachfelder.de // Registrierung abschließen');
        });

        return User::create([
            'name' => $data['name'],
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'birthdate' => $data['birthdate'],
            'postalCode' => $data['postalCode'],
            'city' => $data['city'],
            'sex' => $data['sex'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'confirmation_code' => $code
        ]);
       
    }
}
