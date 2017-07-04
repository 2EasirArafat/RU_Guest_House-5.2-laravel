@extends('layout')

@section('body-content')
  <div class="jumbotron">
  
    <form class="form-inline" method="POST" action="{{route('checkValidity')}}">
            {{ csrf_field() }}

          <div class="form-group @if($errors->has('arriving_date')) has-error @endif">
              <label >Arriving Date</label>
              <input type="date" class="form-control"  name ="arriving_date" id="exampleInputEmail3" placeholder="Arriving Date">
              {!!$errors->first('arriving_date','<span class="help-block">:message</span>')!!}
          </div>

          <div class="form-group @if($errors->has('leaving_date')) has-error @endif">
              <label class="">Leaving Date</label>
              <input type="date" class="form-control" name="leaving_date" id="exampleInputPassword3" placeholder="Leaving Date">
              {!!$errors->first('leaving_date','<span class="help-block">:message</span>')!!}
          </div>

          <div class="form-group @if($errors->has('room')) has-error @endif">
             <div class="dropdown">

                 <select class="btn btn-md" name="room">
                    <option value="" selected="">Select room</option>
                    <option value="Small" >SMALL</option>
                    <option value="Medium" >MEDIUM</option>
                    <option value="Large">LARGE</option>
                    <option value="Extra Large">Extra Large</option>
                </select>
                {!!$errors->first('room','<span class="help-block">:message</span>')!!}
            </div>
            
        </div>
        <div class="form-group">

          <button type="submit" class="btn btn-primary">Check Validity</button>
        </div>
           
 
    </form>
  
   </div>
@endsection
