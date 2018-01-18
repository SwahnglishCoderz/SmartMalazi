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
</div>
<div class="row">
    
        
                <div class="col-md-offset-4 col-md-7"  style="margin-top:-2%;margin-bottom:1%;">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-4">
                            <h3>Room {{$rooms->room_name}} Pictures </h3>
                        </div>
        
                    </div>

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

                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>

                    </form>

                </div> <!-- col-6 / end -->

                @endforeach

            @endif



        </div> 
    </div> 

 


@endsection