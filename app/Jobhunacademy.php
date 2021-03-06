<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobhunacademy extends Model
{
    protected $fillable = [
        'name',
        'class_name',
        'email_address',
        'phone',
        'evidence_transfer',
        'payment_status',
        'information'
    ];

    public $timestamps = true;
}
