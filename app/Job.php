<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'type_loker',
        'company_name',
        'company_tagline',
        'description_company',
        'company_address',
        'company_website',
        'company_email',
        'company_phone',
        'position_sought',
        'type_work',
        'description_job',
        'recruit_process',

        'logo_url',
        'upload_poster',
        'evidence_transfer'
    ];



    public $timestamps = true;
}
