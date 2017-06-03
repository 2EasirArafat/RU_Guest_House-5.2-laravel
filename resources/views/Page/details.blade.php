@extends('layout')

@section('body-content')

 <div class="container">
    <div class="jumbotron">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h2 class="title">Details Confirmation</h2>
                  
                  </div>
        </div> 

          <p class="alert alert-info text-right">
           <a class="btn btn-primary" href="{{('finalize')}}" role="button"><span class="glyphicon glyphicon-plus"></span>Confirm Booking</a>
         </p>



        <table class="table table-hover">
            <tbody>
                      <tr>
                             <th>ID</th>
                              <td>{{('1')}}</td>
                      <tr>
                             <th>Arriving Date</th>
                              <td>{{('01-05-2017')}}</td>
                      <tr>
                             <th>Leaving Date</th>
                             <td>{{('03-05-2017')}}</td>
                      <tr>


                              <th>Total Days</th>
                              <td>{{('2')}}</td>
                      <tr>
                             <th>Room Name</th>
                             <td>{{('Room-120')}}</td>
                      <tr>
                              <th>Room Capacity</th>
                              <td>{{('3')}}</td>
  
    </tr>
  </tbody>
</table>



</div>

</div>

@endsection

{{--    $date = \Carbon\Carbon::parse('2016-09-17 11:00:00');
                              $now =\Carbon\Carbon::now();

                              $diff = $date->diffInDays($now);
                              <td> {{ $diff }} </td>
                              echo $diff;
                        --}}
