<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
       protected $fillable = [
        'room_name', 'roomtype_id', 'room_status',
    ];

      function roomType(){
        return $this->hasOne('App\RoomType');
    }
    function Booking()
    {
        return $this->hasOne('App\Booking');
    }

}
