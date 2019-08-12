<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $fillable = [
                            'id',
                            'user_id',
                            'checktype', 
                            'longitude', 
                            'latitude', 
                            'accuracy', 
                            'altitude', 
                            'details'
    ];

    //Each checkin belongs to a user
    public function user(){
        return $this->belongsTo('App\User');
    }
}
