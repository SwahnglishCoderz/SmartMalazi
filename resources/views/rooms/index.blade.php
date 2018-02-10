@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-1">

            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">

                <li class="previous" ><a href="#" onclick="history.go(-1)"><span aria-hidden="true">&larr;</span>Back</a>

                </li>
            </ul>
        </div>

        <div class="links pull-right">
            <!--<a href="{{ route('rooms.create',$lodges->lodge_id) }}" style="color:#F8F8F6">Add Room</a>-->
            <a href="#" data-toggle="modal" style="color:#F8F8F6"data-target="#myModal">Add Room</a>
        </div>


    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="box-header with-border">
                @if(count($rooms)>=1)
                    <h3 class="box-title" style="color:#F8F8F6">{{$lodges->lodge_name}} Rooms</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <div class="form-group pull-right">
                            <input type="text" class="search form-control" placeholder="Search">
                        </div>
                <table class="table table-bordered" id="view_rooms"style="color:#F8F8F6">
                    <thead>
                    <tr>

                        <th>Room</th>
                        <th>Price</th>
                        <th style="width: 60px">Edit</th>
                        <th style="width: 60px">Room Gallery</th>
                        <th style="width: 60px">Occupied/Un-Occupied</th>
                        <th style="width: 60px">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                        <div class="box">

                            <tr>

                                <td ><a href="{{env('APP_URL')}}/rooms/show/{{$lodges->lodge_id}}/{{$room->room_id}}" style="color:#F8F8F6">{{$room->room_name}}</a></td>
                                <td style="color:#F8F8F6">{{$room->price}}</td>
                                <td style="width: 60px"><a href="#" data-toggle="modal" style="color:#F8F8F6"data-target="#myModal{{$room->room_id}}" class="btn btn-primary">Edit</a></td>
                                <td style="width: 60px"><a href="{{env('APP_URL')}}/album/index/{{$lodges->lodge_id}}/{{$room->room_id}}" class="btn btn-primary">Gallery</a></td>
                                <td style="width: 60px">
                                    @if($room->room_status=="Not Occupied")
                                    <a href="{{env('APP_URL')}}/notoccupied/{{$lodges->lodge_id}}/{{$room->room_id}}" class="btn btn-danger" onclick="return confirm ('Are you sure you want to change room status?') ">{{$room->room_status}}</a>
                                    @else
                                    <a href="{{env('APP_URL')}}/occupied/{{$lodges->lodge_id}}/{{$room->room_id}}" class="btn btn-success" onclick="return confirm ('Are you sure you want to change room status?') ">{{$room->room_status}}</a>
                                @endif
                                </td>
                                <td style="width: 60px"><a href="{{env('APP_URL')}}/rooms/delete/{{$lodges->lodge_id}}/{{$room->room_id}}" class="btn btn-danger" onclick="return confirm ('Are you sure you want to delete room {{$room->room_name}}?') ">Delete</a></td>

                            </tr>
                        </div>
                        <div id="myModal{{$room->room_id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog" >

                                <!-- Modal content-->
                                <div class="modal-content" id="modal">
                                    <div class="modal-header">
                                        <button type="button" class="close" style="color:#FFF"data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"style="color:#F8F8F6">Edit Room  ~~{{$lodges->lodge_name}}~~</h4>
                                    </div>
                                    <div class="modal-body">
                                        @include('rooms.edit',[$lodges,$room])
                                    </div>

                                </div>

                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <!-- /.box-body -->


        </div>
        {{$rooms->links()}}
        @else
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
            <div class="alert alert-info">
            <strong>Info!</strong>Sorry No Rooms Present At the Moment.
          </div>
        </div>
        </div>

        @endif
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



    <script>
            $(document).ready(function(){
                $('.search').on('keyup',function(){
                    var searchTerm = $(this).val().toLowerCase();
                    $('#view_rooms tbody tr').each(function(){
                        var lineStr = $(this).text().toLowerCase();
                        if(lineStr.indexOf(searchTerm) === -1){
                            $(this).hide();
                        }else{
                            $(this).show();
                        }
                    });
                });
            });
            </script>
@endsection
