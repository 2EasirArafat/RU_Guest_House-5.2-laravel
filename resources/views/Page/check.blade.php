@extends('layout')

@section('body-content')
   <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h2 class="title">Current Booking Information</h2>
                  
                  </div>
    </div> 

  <p class="text-right">
    <a class="btn btn-xs btn-primary" href="{{('room_booking')}}" role="button"><i class="glyphicon glyphicon-plus"></i>Add Booking</a>
  </p>

    <div class="jumbotron">
  
    <form class="form-inline">
          <div class="form-group">
              <label >Arriving Date</label>
              <input type="date" class="form-control" id="exampleInputEmail3" placeholder="Arriving Date">
          </div>

          <div class="form-group">
              <label class="">Leaving Date</label>
              <input type="date" class="form-control" id="exampleInputPassword3" placeholder="Leaving Date">
          </div>

          <div class="form-group">
             <div class="dropdown">

         <select name="Room" class="btn btn-md">
            <option value="" selected="">Select room</option>
            <option value="Small" >SMALL</option>
            <option value="Medium" >MEDIUM</option>
            <option value="Large">LARGE</option>
            <option value="Extra Large">Extra Large</option>
        </select>

            </div>
        </div>
           <a href={{('#')}} class="btn btn-md btn-primary"/>Extend</a>
           <a href={{('#')}} class="btn btn-md btn-danger"/>Cancel</a>
 
    </form>
  
   </div>

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
