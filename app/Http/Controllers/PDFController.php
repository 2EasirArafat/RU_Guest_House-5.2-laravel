<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use PDF;

use App\Booking;

class PDFController extends Controller
{
    public function getPDF(){
    	$bookings=Booking::all();
    	$pdf=PDF::loadView('Page.finalize',['bookings'=>$bookings]);
    	return $pdf->download('finalize.pdf');
    }
}
