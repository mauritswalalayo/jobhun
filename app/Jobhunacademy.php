<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobhunacademy extends Model
{
    protected $fillable = [
        'name',
        'class',
        'email_address',
        'phone',
        'evidance_transfer',
        'payment_status',
        'information'
    ];

    public $timestamps = true;
}
