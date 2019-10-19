<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mediapartner extends Model
{
    protected $fillable = [
        'type_mediapartner',
        'event_name',
        'event_organizer',
        'contact_event',
        'event_date',
        'event_venue',
        'event_details',
        'email',
    ];

    public $timestamps = true;
}
