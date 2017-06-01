@extends('layout')

@section('body-content')

 <div class="container">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">Confirmation Booking procedure</h1>
                  
                  </div>
        </div> 

          <p class="alert alert-info text-right">
           <a class="btn btn-md btn-primary" href="{{('finalize')}}" role="button"><span class="glyphicon glyphicon-plus"></span>Confirm Booking</a>
         </p>


        <table class="table table-hover">
            <tbody>
                      <tr>
                             <th>Arriving Date</th>
                              <td></td>
                      <tr>
                             <th>Leaving Date</th>
                             <td></td>
                      <tr>
                              <th>Total Days</th>
                              <td></td>
                      <tr>
                             <th>Room Name</th>
                             <td></td>
                      <tr>
                              <th>Room Capacity</th>
                              <td></td>
  
    </tr>
  </tbody>
</table>



</div>


@endsection
