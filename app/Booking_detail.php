<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking_detail extends Model
{
    protected $fillable = ['booking_id', 'booking_date', 'roomtype_id'];
 
    function Booking()
    {
        return $this->belongsTo('App\Booking');
    }
 
    function roomtype()
    {
        return $this->belongsTo('App\Room');
    }
}
