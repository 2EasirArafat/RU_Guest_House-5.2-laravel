@extends('layout')

@section('body-content')

<div class="container">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">Guest Information</h1>
                  
                  </div>
              </div> 

      <div class="row">
  <div class="col-md-12">
 


      <div class="jumbotron">
      
    <form class="form-horizontal">
  <div class="form-group">
    <label class="col-sm-3 control-label">Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputText" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Phone no</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputText" placeholder="Phone no">
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-3 control-label">SalaryID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputText" placeholder="SalaryID">
    </div>
  </div>
   
     <div class="form-group">
    <label class="col-sm-3 control-label">Department</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputText" placeholder="Department">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-3 control-label">Designation</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputText" placeholder="Designation">
    </div>
  </div>

    <div class="form-group">
    <label class="col-sm-3 control-label">Email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
    <a href="#"/>  <button type="submit" class="btn btn-info">Print</button> </a>
    </div>
  </div>
</form>
           </div>
           </div> 



       </div> 
@endsection