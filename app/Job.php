<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
  
{
    protected $fillable = [
        'job_service',
        'job_company_name',
        'job_company_tagline',
        'job_company_description',
        'job_company_address',
        'job_company_website',
        'job_company_email',
        'job_company_phone',
        'job_position_sought',
        'job_type',
        'job_description',
        'job_recruit_process',

        'job_logo_url',
        'job_poster_url',
        'job_transfer_url'
    ];

    public $timestamps = true;
}

