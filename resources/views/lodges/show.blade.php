@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <ul class="pager" style="margin-top:-2%;margin-bottom:1%;">
                <li class="previous" ><a href="#" onclick="history.go(-1)">
                        <span aria-hidden="true">&larr;</span>Back</a>
                </li>
            </ul>
        </div>
        
                    <div class="col-md-4">
                           
                            <a href="#" data-toggle="modal" style="color:#F8F8F6"data-target="#myModal">Add Room</a>
                </div>
                <div class="col-md-4">
                    <a href="/rooms/{{$lodges->lodge_id}}" style="color:#F8F8F6">View Rooms</a>
                       
            </div>
          
        
    </div>
    <div class="row"><div class="col-md-offset-4 col-md-4">   @include('messages.messages')</div></div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered" >
                <tr>
                    <th colspan="2" style="text-align:center" >Lodge Details</th>
                </tr>
                <tr style="color:#F8F8F6"><th>Lodge Name</th><td>{{$lodges->lodge_name}}</td></tr>
                <tr><th>Date of Registration</th><td>{{$lodges->created_at}}</td></tr>
            </table>
        </div>
    </div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content" id="modal">
            <div class="modal-header">
              <button type="button" class="close"style="color:#FFF" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"style="color:#F8F8F6">Add Room  ~~{{$lodges->lodge_name}}~~</h4>
            </div>
            <div class="modal-body">
                    <form action="{{route('rooms.store')}}" method="POST">
                            {{ csrf_field() }}
    
                            @include('messages.messages')
    
                            <div class="form-group">
                                <div class="input-group">
    
    
                                    <input type="text"  name="lodge_id" class="hide" value="{{$lodges->lodge_id}}" required >
    
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bed"></i></span>
    
                                    <input type="text" name="room_name" class="form-control" placeholder="Room Name" required>
    
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
    
                                    <input type="text" name="price" class="form-control" placeholder="Price" required>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bed"></i></span>
    
                                    <select  class="form-control" name="room_status" required>
    
                                        <option >--Room Status--</option>
                                        <option value="Occupied">Occupied</option>
                                        <option value="Not Occupied">Not Occupied</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                                    <input type="submit" value="Add Room" class="btn btn-success pull-right">
                             </div>
                        </form>
            </div>
            
          </div>
      
        </div>
      </div>


@endsection