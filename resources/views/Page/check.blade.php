@extends('layout')

@section('body-content')


  <p class="alert alert-info text-right">
    <a class="btn btn-xs btn-primary" href="{{('room_booking')}}" role="button"><i class="glyphicon glyphicon-plus"></i>Add Booking</a>
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

        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h2 class="title">All Booking Information</h2>
                  
                  </div>
         </div> 
  
              <div class="row">


                 <div class="col-sm-12">
                       <div style="height: 400px; overflow: auto;">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Arriving Date</th> 
                                <th>Leaving Date</th>
                                <th>Room Name</th>
                                <th>Status</th> 
                                <th width="15%">Action</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                @foreach ($bookings as $s)
                          <tr>
                              <!--  <td>{{ \Carbon\Carbon::parse($s->created_at)->format('d-m-Y') }}</td>  _-->
                                <td>{{\Carbon\Carbon::yesterday()}} </td>
                                <td>{{\Carbon\Carbon::tomorrow()}} </td>
                               <td>{{('Room-120')}}</td>
                                <td>{{$s->status}}</td>
                               <td>
          <a class="btn btn-xs btn-primary" href="{{('room_booking')}}">Extend</a>
      <a class="btn btn-xs btn-danger"  href="{{('#')}}" onclick="return confirm('Are you sure?')">Cancel</a>
                            </td>
                           
                         </tr>
              @endforeach
                      </tbody>


                        </table>


                        </div>
                </div>
             </div>
  
      </div>
@endsection
