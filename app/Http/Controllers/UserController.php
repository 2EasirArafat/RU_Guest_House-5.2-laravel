<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Booking;
use App\Room;
use App\RoomType;
use App\User;

class UserController extends Controller
{
     public function showProfile()
    {
        return view('Page.index');
    }


     public function showlogin()
    {
        return view('Page.login');
    }



    public function showcheck()
    {

        $bookings = Booking::with('user','room')->get();
    	return view('Page.check')
        ->with('bookings',$bookings);
    }



    public function showroom_booking()
    {
    	return view('Page.room_booking');
    }



    public function showfinalize()
    {
       $bookings =Booking::first();
       return view('Page.finalize')
       ->with('bookings',$bookings);
    	
    }



    public function showdetails()
    {

      //  $users = User::find(1);
        //$bookings =Booking::find(1);
        //$rooms=Room::find(1);
        //$roomtypes=RoomType::find(1);

         //return view('Page.details',compact('users','bookings',rooms,roomtypes));-->

    	return view('Page.details');
    }



}
