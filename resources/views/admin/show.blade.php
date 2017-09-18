@extends('layouts.adminLayout')

@section('admin_content')


  <p class="alert alert-info text-right">
    <a class="btn btn-xs btn-primary" href="{{route('add.room')}}" role="button"><i class="glyphicon glyphicon-plus"></i>Add room</a>
  </p>



<!--
  <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">Booking Information</h1>
                  
                  </div>
    </div> 


-->

   <!--Table status started-->
      
       <div class="">

       
        <div class="panel-heading">
                   @if(session('msg'))
                    <div class="text-center alert alert-success" >{{session('msg')}}</div>
                  @endif
                 <div class="panel-title text-center">
                    <h2 class="title">All Available Room Info</h2>
                  
                  </div>
         </div> 
  
              <div class="row">


                 <div class="col-sm-12">
                       <div style="height: 400px; overflow: auto;">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Room Name</th>
                                <th>Room_category</th>
                                <th>Room_status</th> 
                                <th>Action</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                @foreach ($rooms as $s)
                          <tr>
                             
                              <td>{{$s->room_name}}</td>
                              <td>{{$s->roomtype->room_category}}</td>
                              <td>{{$s->roomtype->room_capacity}}</td>
                             <td> 
                             <a class="btn btn-xs btn-danger"  href="{{ route('delete.room', ['id' => $s->id]) }}" onclick="return confirm('Are you sure?')">Delete</a>  
                        
                            </td>
                           
                         </tr>
              @endforeach
                      </tbody>


                        </table>


                        </div>
                </div>
             </div>
  
      </div>
@endsection
