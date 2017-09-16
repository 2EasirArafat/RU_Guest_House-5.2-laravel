@extends('layouts.adminLayout')

@section('admin_content')

	<h3>Add Room</h3>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
	 <form  class="form-horizontal " role="form" method="POST" action="{{ route('store.room') }}" >
        {{ csrf_field() }}

          <dir>
            @if(session('msg'))
                <div class="alert alert-danger">
                  {{session('msg')}}
                </div>
            @endif
          </dir>
         
			<div class="form-group row">
			      <label for="roomNumber" class="col-sm-6 col-form-label">Room Number</label>
			      <div class="col-sm-6">
			        <input type="text" class="form-control" name="roomNumber" placeholder="Room Number">
			      </div>
			  </div>
        
           <div class="form-group @if($errors->has('room')) has-error @endif">

           	<label for="Room Type" class="col-sm-6 col-form-label">Room Type</label>
             <div class="dropdown col-sm-6">

                 <select class="btn btn-md form-control" name="roomType" >
                    <option value="" selected="">SELECT ROOM</option>
                    <option value="1" >SMALL</option>
                    <option value="2" >MEDIUM</option>
                    <option value="3">LARGE</option>
                    <option value="4">EXTRA LARGE</option>
                </select>
                {!!$errors->first('room','<span class="help-block">:message</span>')!!}
            </div>
            </div>
          <div class="form-group row">
          	<label class="col-sm-6"></label>
          	 <div class="col-sm-6 ">
            	<button type="submit"  class="btn btn-primary form-control">Add Room</button>
          </div>
    	</div>
    </form>
    </div>
	</div>

@endsection