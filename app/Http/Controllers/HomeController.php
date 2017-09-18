<?php

namespace App\Http\Controllers;


use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Page.check');
    }


 //password changed //

    public function changedPassword()
    {
        $user = User::find(auth()->user()->id);

        return view('users.changedPassword',compact('user'));
    }

   public function storePassword(Request $request )
    {
        $rules = [
        'current_password'   => 'required',
        'password'           => 'required|min:6|confirmed'
        ];
         $this->validate($request, $rules);
        $current_password = ( $request->current_password);
        $user_id          = Auth::id();
        $db_password      = User::findOrFail($user_id)->password;
        if(Hash::check( $current_password,$db_password))
        {
            User::findOrFail($user_id)
                    ->update(['password' =>bcrypt($request->password)

                    ]);
            $msg = "Password Successfully Changed";
            $status = 1;
        }else
        {
            $msg = "Current password does not matched";
            $status = 0;
        }
        return back()->with('msg',$msg)
                     ->with('status',$status);
    }








}
