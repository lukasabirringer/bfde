<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beachcourt extends Model
{
    protected $fillable = [
        'courtName', 'city',
    ];
}
