@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-3">
        
                    <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">
                        <li class="previous" ><a href="#" onclick="history.go(-1)"><span aria-hidden="true">&larr;</span>Back</a>
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
    
        
                <div class="col-md-offset-3 col-md-7"  style="margin-top:-2%;margin-bottom:1%;">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-4">
                            <h3 style="color:#F8F8F6">Room {{$rooms->room_name}} Pictures </h3>
                        </div>
        
                    </div>

</div>
<div class="col-md-2">
    <a href="#" data-toggle="modal" style="color:#F8F8F6"data-target="#myModal">Add Picture</a>
   

</div>
</div>


<div class="row">
        <div class="col-md-offset-4 col-md-4">@include('messages.messages')</div>
      
    </div>

    <div class="row">

    <div class='list-group gallery'>
          
        

            @if($galleries->count())

                @foreach($galleries as $gallery)

                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>

                    <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $gallery->room_picture }}">

                        <img class="img-responsive" alt="" src="/images/{{ $gallery->room_picture }}" />

                        <div class='text-center'>

                            <small class='text-muted'>{{ $gallery->picture_caption }}</small>

                        </div> <!-- text-center / end -->

                    </a>

                    <form action="{{ url('imagedelete',$gallery->gallery_id) }}" method="POST">

                    <input type="hidden" name="_method" value="delete">

                    {!! csrf_field() !!}

                    <button type="submit" class="close-icon btn btn-danger"><i class="fa fa-window-close"></i></button>

                    </form>

                </div> <!-- col-6 / end -->

                @endforeach
                @else
                <div class="alert alert-info">
                    <strong>Info!</strong>Sorry No Pictures Present At the Moment.
                  </div>
            @endif



        </div> 
    </div> 

 
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" >
  
      <!-- Modal content-->
      <div class="modal-content" id="modal">
        <div class="modal-header">
          <button type="button" class="close" style="color:#FFF"data-dismiss="modal">&times;</button>
          <h4 class="modal-title"style="color:#F8F8F6">Add Picture</h4>
        </div>
        <div class="modal-body">
            <form action="/imageupload/modal" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

               
                <div class="form-group">
                    <div class="input-group">
                        
                        <input type="text"  class="hide" name="room_id" value="{{$rooms->room_id}}">
                    </div>
                </div>
                

                <div class="form-group">
                    <div class="input-group">
                    
                        <!-- added an array index since no loop is needed to get the lodge id -->
                        <input type="text" name="lodge_id" value="{{$rooms->lodge_id}}" class="hide">

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

               
                <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        <input type="submit" value="Add" class="btn btn-success pull-right">
                 </div>
            </form>
        </div>
      
      </div>
  
    </div>
  </div>

@endsection