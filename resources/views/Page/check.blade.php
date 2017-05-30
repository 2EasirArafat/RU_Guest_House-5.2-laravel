@extends('layout')

@section('body-content')
   <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">Booking Information</h1>
                  
                  </div>
    </div> 

  <p class="alert alert-info text-right">
    <a class="btn btn-xs btn-primary" href="{{('room_booking')}}" role="button"><i class="glyphicon glyphicon-plus"></i>Add Booking</a>
  </p>
      
       <div class="jumbotron">
  
              <div class="row">


                 <div class="col-sm-12">
                       <div style="height: 400px; overflow: auto;">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Arriving Date</th> 
                                <th>Leaving Date</th>
                                <th>Details</th>
                                <th>Extend</th>
                                <th>Delete</th> 
                            </tr>
                            </thead>
                        </table>


                        </div>
                </div>
             </div>
  
      </div>
@endsection
