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
            <a href="{{ route('rooms.create',$lodges->lodge_id) }}" style="color:#F8F8F6">Add Room</a>
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

                                <td ><a href="/rooms/show/{{$lodges->lodge_id}}/{{$room->room_id}}" style="color:#F8F8F6">{{$room->room_name}}</a></td>
                                <td style="color:#F8F8F6">{{$room->price}}</td>
                                <td style="width: 60px"><a href="#" data-toggle="modal" style="color:#F8F8F6"data-target="#myModal{{$room->room_id}}" class="btn btn-primary">Edit</a></td>
                                <td style="width: 60px"><a href="/album/index/{{$lodges->lodge_id}}/{{$room->room_id}}" class="btn btn-primary">Gallery</a></td>
                                <td style="width: 60px">
                                    @if($room->room_status=="Not Occupied")
                                    <a href="" class="btn btn-danger">{{$room->room_status}}</a>
                                    @else
                                    <a href="" class="btn btn-success">{{$room->room_status}}</a>
                                @endif
                                </td>
                                <td style="width: 60px"><a href="/rooms/delete/{{$lodges->lodge_id}}/{{$room->room_id}}" class="btn btn-danger" onclick="return confirm ('Are you sure you want to delete room {{$room->room_name}}?') ">Delete</a></td>

                            </tr>
                        </div>
                        <div id="myModal{{$room->room_id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog" >

                                <!-- Modal content-->
                                <div class="modal-content" id="modal">
                                    <div class="modal-header">
                                        <button type="button" class="close" style="color:#FFF"data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"style="color:#F8F8F6">Edit Room</h4>
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

