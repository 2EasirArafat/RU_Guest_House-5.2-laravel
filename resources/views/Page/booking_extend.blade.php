@extends('layout')

@section('body-content')
  <div class="jumbotron">
      
      <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
      <form  class="form-horizontal" role="form" method="POST" action="{{ route('check_extend.Validity') }}" >
        {{ csrf_field() }}

          <dir>
            @if(session('msg'))
                <div class="alert alert-danger">
                  {{session('msg')}}
                </div>
            @endif
          </dir>
          <input type="hidden" name="id" value="{{$booking_extend_details->id}}"><input type="hidden" name="room" value="{{$booking_extend_details->room->roomType->id}}">
          
          <input type="hidden" name="arriving_date" value="{{$booking_extend_details->leaving_date}}">

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-6 form-label">Room Type</label>
            <div class="col-sm-6">
              <label class="text-left">{{$booking_extend_details->room->roomType->room_category}}</label>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-6 form-label">Arriving Date</label>
            <div class="col-sm-6">
              <label class="text-left">{{$booking_extend_details->arriving_date}}</label>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-6 form-label">Select Leaving Date</label>
            <div class="col-sm-6">
              <input type="date" class="form-control" name="leaving_date" id="exampleInputPassword3" value="{{old('leaving_date')}}">
              {!!$errors->first('leaving_date','<span class="help-block">:message</span>')!!}
            </div>
          </div>
          <div class="form-group row">
           <div class="col-sm-12">
            <button type="submit"  class="btn btn-primary pull-right">Check Availability</button>
          </div>
    </div>
    </form>
    
    </div>
    </div>
   </div>
@endsection
