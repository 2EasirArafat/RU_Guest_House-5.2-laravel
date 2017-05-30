@extends('layout')

@section('body-content')
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
           <a href={{('details')}} class="btn btn-lg btn-primary"/>Check Validity</a>
 
    </form>
  
   </div>
@endsection
