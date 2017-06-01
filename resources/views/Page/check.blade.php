@extends('layout')

@section('body-content')
   <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h2 class="title">Booking Information</h2>
                  
                  </div>
    </div> 

  <p class="text-right">
    <a class="btn btn-md btn-primary" href="{{('room_booking')}}" role="button"><i class="glyphicon glyphicon-plus"></i>Add Booking</a>
  </p>
<!--
  <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">Booking Information</h1>
                  
                  </div>
    </div> 


-->

   <!--Table status started-->
      
       <div class="jumbotron">
  
              <div class="row">


                 <div class="col-sm-12">
                       <div style="height: 400px; overflow: auto;">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Arriving Date</th> 
                                <th>Leaving Date</th>
                                <th>Room Type</th>
                                <th>Room Category</th>
                                <th>Status</th> 
                            </tr>
                            </thead>
                        </table>


                        </div>
                </div>
             </div>
  
      </div>
@endsection
