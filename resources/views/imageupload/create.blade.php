@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-offset-4 col-md-4">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"> Add room Picture</h3>
            </div>

            <div class="panel-body">
                <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @include('messages.messages')
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bed"></i></span>

                            <select  class="form-control" name="room_id" required>

                                <option>--Select Room--</option>
                                @foreach($rooms as $room)
                                    <option value="{{$room->room_id}}">{{$room->room_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-bed"></i></span>

                            <!-- added an array index since no loop is needed to get the lodge id -->
                            <input type="text" name="lodge_id" value="{{$rooms[0]->lodge_id}}"  required>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>

                            <input type="text" name="picture_caption" class="form-control" placeholder="Picture Caption" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="UploadRoomPicture">Upload Room Picture</label>
                        <input type="file" id="UploadRoomPicture" name="room_picture"/>
      
                        
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