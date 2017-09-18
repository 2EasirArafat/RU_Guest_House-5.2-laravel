<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use PDF;

use App\Booking;

use User;

class PDFController extends Controller
{
    public function getPDF(){
    	$bookingDetails=Booking::with('user')->get();
    	$pdf=PDF::loadView('Page.finalize');
    	return $pdf->download('finalize.pdf')->with('bookingDetails',$bookingDetails);
    }
}


