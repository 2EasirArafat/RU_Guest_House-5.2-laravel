<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Booking;
use App\Room;
use App\RoomType;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\BookingDetail;
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
        $bookings = Booking::where('user_id',Auth::id())->get();
                return view('Page.check')
                ->with('bookings',$bookings);
    }


    public function showroom_booking()
    {
        
        $room_types = RoomType::lists('room_category','id');
        
        return view('Page.room_booking')
                ->with('room_types', $room_types);
    }



    public function showfinalize(Request $request)
    {
      $book = new Booking;
      $book->arriving_date     = $request->arrive;
      $book->leaving_date      = $request->leave;
      $book->room_id           = $request->room;
      $book->user_id        = Auth::id();
      $book->save();
      $bookings =Booking::findOrFail($book->id);
       if($bookings){ 
        $rm  = Room::find($request->room);
        if($rm->room_status == "empty")
        {
          Room::findOrFail($request->room)->update(['room_status' =>"booked"]);
        }
       return view('Page.finalize')
       ->with('bookings',$bookings);
    	}
        else{
        return back();
        }
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


   public function checkValidity(Request $request)
   {
    $rules = [
        'arriving_date'  => 'required',
        'leaving_date'   => 'required',
        'room'           => 'required' 
    ];
    $this->validate($request,$rules);
    $arrive    = Carbon::parse($request->arriving_date) ;
    $leave     = Carbon::parse($request->leaving_date) ;
    
    if($arrive< Carbon::now())
    {
        return back()->with('msg','Please select a valid date')
                     ->withInput();
    }
    
    $day = $arrive->diffInDays($leave);
    if( $day== 0)
    {
        $day =  1;
    }
    
    $room      = $request->room ;
    $roomType  = RoomType::find($room);

     $rm    = Room::where('roomtype_id',$roomType->id)
                         ->first();



    $bookingdetails = BookingDetail::whereBetween('booking_date',[$request->arriving_date,$request->leaving_date])
        ->where('roomtype_id',$room);
        ->first();
    // dd($bookingdetails);
    $capacity = $roomType->room_capacity;
    if(!$bookingdetails){
    
      $booking = Booking::create([
        'user_id'       => Auth::user()->id,
        'arriving_date' => $arrive ,
        'leaving_date'  => $leave ,
        'room_id'       => $rm->id,
        ]);
    
        $start_dt = Carbon::parse( $request->arriving_date)->toDateString();
        $end_dt   = Carbon::parse( $request->leaving_date)->toDateString();
       $date = $start_dt ;
       
      while(strtotime($date) <= strtotime($end_dt))
      {
       $bookingdetails = BookingDetail::create([
        'booking_id'      =>$booking->id ,
        'booking_date'    => $date,
        'roomtype_id'         => $rm->id
        ]);
        $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
       }

       
    }






    // $checkTeacher = Booking::where('user_id',Auth::id())->first();

    // if($rm){
       
    //      return view('Page.details',compact('arrive','leave','rm','day','capacity','checkTeacher'));
    // }else{
    //     $rm       = Room::where('roomtype_id',$roomType->id)
    //                     ->where('room_status','booked')
    //                     ->first();
    //     $bookings  = Booking::where('room_id',$roomType->id)
    //                                 ->whereBetween('arriving_date',[$arrive,$leave])
    //                                 ->orWhereBetween('leaving_date',[$arrive,$leave])
    //                                 ->first();
    //     if(!empty($bookings) )
    //     {
    //         $msg ="No availale room is found!";
    //     }
    //     else
    //     {
    //         return view('Page.details',compact('arrive','leave','rm','day','capacity','checkTeacher')); 
    //     }
    //    }

        return back()->with('msg',"ok")
                  ->withInput();




   }


   public function teacherInfo($id,$arrive, $leave)
   {
    return view('Page.teacherInfo',compact('id','arrive','leave'));
   }

   public function teacherInfoSubmit(){

   }
}
