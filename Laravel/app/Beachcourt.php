<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Favorite;
use Auth;

class Beachcourt extends Model
{
    protected $fillable = [
        'courtName', 'city', 'created_at', 'updated_at'
    ];

    public $timestamps = true;

    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }

    public function favorited()
	{
	    return (bool) Favorite::where('user_id', Auth::id())->where('beachcourt_id', $this->id)->first();
	}
}