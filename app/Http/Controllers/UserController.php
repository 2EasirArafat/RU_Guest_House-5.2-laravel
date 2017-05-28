<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
     public function showProfile()
    {
        return view('profile.index');
    }

     public function showlogin()
    {
        return view('profile.login');
    }

    public function showcheck()
    {
    	return view('profile.check');
    }

    public function showroom_booking()
    {
    	return view('profile.room_booking');
    }

    public function showfinalize()
    {
    	return view('profile.finalize');
    }


    public function showdetails()
    {
    	return view('profile.details');
    }
}
