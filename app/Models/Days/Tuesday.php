<?php

namespace App\Models\Days;

use Illuminate\Database\Eloquent\Model;

class Tuesday extends Model
{
    protected $fillable = [
        'session',
        'day',
        'section',
        'batch',
        'nineAM_ninefiftyAM',
        'tenAM_tenfiftyAM',
        'elevenAM_elevenfiftyAM',
        'twelvePM_twelvefiftyPM',
        'twoPM_twofiftyPM',
        'threePM_threefiftyPM',
        'fourPM_fourfiftyPM',
        'break'
    ];
}
