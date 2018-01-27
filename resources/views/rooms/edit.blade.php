@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-5">
            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">
                <li class="previous" ><a href="{{ url()->previous() }}"><span aria-hidden="true">&larr;</span>Back</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">

        <div class="col-md-offset-3 col-md-6">
            <div class="panel" id="form">
                <div class="panel-heading" style="color:#F8F8F6">Edit Lodge Name</div>
                <div class="panel-body">
                    <form action="/rooms/update/{{$lodges->lodge_id}}/{{$rooms->room_id}}" method="POST">
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

                                <input type="text" name="room_name" class="form-control" value="{{$rooms->room_id}}" placeholder="Room Name" required>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>

                                <input type="text" name="price" class="form-control" value="{{$rooms->price}}" placeholder="Price" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bed"></i></span>

                                <select  class="form-control" name="room_status" required>

                                    <option >--Room Status--</option>
                                    <option @if($rooms->room_status == "Occupied") selected="selected" @endif value="Occupied">Occupied</option>
                                    <option @if($rooms->room_status == "Not Occupied") selected="selected" @endif value="Not Occupied">Not Occupied</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Update" class="btn btn-success pull-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection