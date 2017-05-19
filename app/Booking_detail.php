<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking_detail extends Model
{
    protected $fillable = ['booking_id', 'booking_date', 'roomtype_id'];
 
    function Booking()
    {
        return $this->hasOne('App\Booking');
    }
 
    function Room()
    {
        return $this->hasOne('App\Room');
    }
}
