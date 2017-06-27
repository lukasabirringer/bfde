<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Beachcourt;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'firstName',
        'lastName',
        'email', 
        'password', 
        'postalCode',
        'city',
        'birthdate',
        'role', 
        'user_id', 
        'beachcourt_id',     
        'sex',
        'confirmation_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function isAdmin(){
    return (\Auth::check() && $this->role == 'admin');
    }
    public function isRegular(){
        return (\Auth::check() && $this->role == 'regular');
    }
    public function favorites()
    {
        return $this->belongsToMany(Beachcourt::class, 'favorites', 'user_id', 'beachcourt_id')->withTimeStamps();
    }
}
