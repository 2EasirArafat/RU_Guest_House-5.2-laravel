<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name', 'salaryID', 'designation','department','email','arriving_date','	leaving_date','room_id','status',
    ];

     function Room(){
        return $this->hasOne('App\Room');
    }
}
