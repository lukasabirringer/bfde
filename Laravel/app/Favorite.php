<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function beachcourts()
    {
        return $this->belongsTo('App\Beachcourt');
    }
}
