<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Room;
class AdminController extends Controller
{
    //

    // public function __construct(){

    // 	$this->middleware('auth');
    // }

public function details()
{
  $rooms=Room::with('roomtype')->get();

  return view('admin.show') ->with('rooms',$rooms);
}

// Can not done...

 public function cancel()
   {
     $rooms= Room::findOrFail()->delete();
      return back()->with('msg'," Room information canceled Successfully.");
   }




    public function index()
    {
       $scount= Room::where('roomtype_id',1)->count();
       $mcount= Room::where('roomtype_id',2)->count();
       $lcount= Room::where('roomtype_id',3)->count();
       $exlcount= Room::where('roomtype_id',4)->count();
       return view('admin.index',compact('scount','mcount','lcount','exlcount'));
    }

    public function addRoom()
    {
      return view('admin.addRoom');
    }
    public function storeRoom(Request $request)
    {

      $roles = [
      'roomNumber' => 'required',
      'roomType'   => 'required'
            ];

      $this->validate($request, $roles);

      if(Room::where('room_name','=',$request->roomNumber)->exists())
      {
        $msg = "Room already existed";
      }
      else{
        $room = new Room ;
        $room->room_name = $request->roomNumber;
        $room->roomtype_id  = $request->roomType;
        $room->save();
        $msg = "Successfully Room is added";
         }


         return back()->with('msg',$msg);
    }




    public function deleteRoom($id)
    {
      
      $roomInstance = Room::find($id);

      $roomInstance->delete();

      return redirect()->route('details.room');
    }
}
