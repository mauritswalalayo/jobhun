<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talentpool extends Model
{
    protected $fillable = [
            'full_name',
            'email_address',
            'residence',
            'phone_number',
            'current_age',
            'ability',
            'educational_background',
            'work_position',
            'about_you',
            'work_experience',
            'current_activity',
            'overworked',
            'choose',
            'upload_cv',
            'photo_url',
    ];

    public $timestamps = true;
}
