<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
        protected $fillable = [
        'room_category', 'room_capacity',
    ];


    public function room()
    {
    	return $this->hasOne('App\Room');
    }

    public function booking_details()
    {
    	return $this->hasOne('App\Booking_detail');
    }

}
