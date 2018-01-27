@extends('layouts.master')

@section('content')

<div class="row">
        <div class="col-md-4">
                <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">
                    <li class="previous" >
                        <a href="{{ url()->previous() }}"><span aria-hidden="true">&larr;</span>Back</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7"  style="margin-top:-2%;margin-bottom:1%;">
                <div class="row">
                    <div class="col-md-offset-2 col-md-4">
                        <h3 style="color:#F8F8F6">{{$lodges->lodge_name}}  </h3>
                    </div>
    
                </div>

</div>
        </div>
<div class="row">
    <div class="col-md-offset-4 col-md-4">

        <div class="panel" id="form">
            <div class="panel-heading">
                <h3 class="panel-title" style="color:#F8F8F6"> Add room Picture</h3>
            </div>

            <div class="panel-body">
                <form action="/imageupload/store" method="POST" enctype="multipart/form-data">
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
                        
                            <!-- added an array index since no loop is needed to get the lodge id -->
                            <input type="text" name="lodge_id" value="{{$rooms[0]->lodge_id}}" class="hide">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>

                            <input type="text" name="picture_caption" class="form-control" placeholder="Picture Caption" required>
                        </div>
                    </div>

                    <div class="form-group">
    
                        <input type="file" name="room_picture" class="btn btn-info"/>
      
                        
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