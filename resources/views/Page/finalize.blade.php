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
      
    <tr>
      <th>PhoneNo</th>
      
    <tr>
      <th>SalaryID</th>
     
    <tr>
      <th>Department</th>
     
    <tr>
      <th>Designation</th>
      
    <tr>
      <th>Email</th>
     
    </tr>
  </tbody>
</table>


<p class="text-right">
          
 Teacher/Officer Signature 
           </p>

      
    
           </div>

             <p class="text-right">
          
  <a class="btn btn-md btn-primary" href="{{('#')}}" role="button"><i class="glyphicon glyphicon-forward"></i>Print info</a> 
           </p>


           </div> 



       </div> 
@endsection