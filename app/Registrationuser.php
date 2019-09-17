<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrationuser extends Model
{
    //
    protected $fillable = [
        'user_id','register_link'
    ];

    public function user(){
        return $this->belongsTo('App\User');
   }

    public $timestamps = true;
}
