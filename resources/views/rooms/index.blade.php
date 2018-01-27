@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-1">

            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">

                <li class="previous" ><a href="{{ url()->previous() }}"><span aria-hidden="true">&larr;</span>Back</a>

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

                <table class="table table-bordered" style="color:#F8F8F6">
                    <tr>

                        <th>Room</th>
                        <th>Price</th>
                        <th style="width: 60px">Edit</th>
                        <th style="width: 60px">Room Gallery</th>
                        <th style="width: 60px">Occupied/Un-Occupied</th>
                        <th style="width: 60px">Delete</th>

                    </tr>

                    @foreach($rooms as $room)
                        <div class="box">

                            <tr>

                                <td ><a href="/rooms/show/{{$lodges->lodge_id}}/{{$room->room_id}}" style="color:#F8F8F6">{{$room->room_name}}</a></td>
                                <td style="color:#F8F8F6">{{$room->price}}</td>
                                <td style="width: 60px"><a href="/rooms/edit/{{$lodges->lodge_id}}/{{$room->room_id}}" class="btn btn-primary">Edit</a></td>
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
                    @endforeach
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
@endsection

