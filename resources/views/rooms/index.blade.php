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
            <a href="{{ route('rooms.create',$lodges->lodge_id) }}">Add Room</a>
        </div>


    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="box-header with-border">
                @if(count($rooms)>=1)
                    <h3 class="box-title">{{$lodges->lodge_name}} Rooms</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <table class="table table-bordered">
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

                                <td ><a href="/rooms/show/{{$lodges->lodge_id}}/{{$room->room_id}}">{{$room->room_name}}</a></td>
                                <td >{{$room->price}}</td>
                                <td style="width: 60px"><a href="/rooms/edit/{{$lodges->lodge_id}}/{{$room->room_id}}" class="btn btn-primary">Edit</a></td>
                                <td style="width: 60px"><a href="/gallery/{{$room->room_id}}" class="btn btn-primary">Gallery</a></td>
                                <td style="width: 60px"><a href="" class="btn btn-success">{{$room->room_status}}</a></td>
                                <td style="width: 60px"><a href="/rooms/delete/{{$lodges->lodge_id}}/{{$room->room_id}}" class="btn btn-danger" onclick="return confirm ('Are you sure you want to delete the lodge?') ">Delete</a></td>

                            </tr>
                        </div>
                    @endforeach
                </table>

            </div>
            <!-- /.box-body -->


        </div>
        {{$rooms->links()}}
        @else
            <p>
            <h1>No Rooms Found!!</h1>
            </p>
        @endif
    </div>
@endsection

