@extends('layout')

@section('body-content')

<div class="container">
        
      <div class="jumbotron">

      <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h2 class="title">Teacher/Offier Information</h2>
                  
                  </div>
              </div> 

              <table class="table table-hover">
                        <tbody>
    <tr>
      <th>Name</th>
      
      <td>{{($bookingDetails->user->name)}}</td>
      
    <tr>
      <th>SalaryID</th>
       @if($bookingDetails->salaryID)
      <td>{{$bookingDetails->salaryID}}</td>
      @endif
    <tr>
      <th>Department</th>
      @if($bookingDetails->department)
      <td>{{($bookingDetails->department)}}
      @endif
    <tr>
      <th>Designation</th>
      @if($bookingDetails->designation)
      <td>{{($bookingDetails->designation)}}</td>
      @endif
      
    <tr>
      <th>Email</th>
     
      <td>{{($bookingDetails->user->email)}}</td>
     
    </tr>
     <tr>
      <th>Arriving date</th>
      <td>{{($bookingDetails->arriving_date)}}</td>
     
    </tr>
     <tr>
      <th>Leaving date</th>
      <td>{{($bookingDetails->leaving_date)}}</td>
     
    </tr>
  </tbody>
</table>

<hr>

<p class="text-right">
          
 Teacher/Officer Signature 
           </p>

      
    
           </div>

             <p class="text-right">
          
  <a class="btn btn-md btn-primary" href="{{url('getPDF')}}" role="button"><i class="glyphicon glyphicon-forward"></i>Print info</a> 
           </p>


           </div> 



       </div> 
@endsection