<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
    	return view('Page.check');
    }

    public function showroom_booking()
    {
    	return view('Page.room_booking');
    }

    public function showfinalize()
    {
    	return view('Page.finalize');
    }


    public function showdetails()
    {
    	return view('Page.details');
    }
}
