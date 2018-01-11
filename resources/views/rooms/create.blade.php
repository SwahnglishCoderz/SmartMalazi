
@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-4">

            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">
                <li class="previous" ><a href="{{ url()->previous() }}"><span aria-hidden="true">&larr;</span>Back</a>
                </li>
            </ul>
        </div>

        <div class="col-md-7"  style="margin-top:-2%;margin-bottom:1%;">
            <div class="row">
                <div class="col-md-offset-2 col-md-4">
                    <h3>{{$lodges->lodge_name}}  </h3>
                </div>

            </div>
        </div>

        <div class="links">
            <a href="{{ route('rooms.index',$lodges->lodge_id) }}">View Rooms</a>
        </div>

    </div>
    <div class="row">
        <div class="col-md-offset-4 col-md-4">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> Add room</h3>
                </div>

                <div class="panel-body">
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

                        <div class="form-group">
                            <input type="submit" value="Add" class="btn btn-success pull-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection