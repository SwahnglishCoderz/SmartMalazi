@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-5">
            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">
                <li class="previous" ><a href="{{route('lodges.index')}}"><span aria-hidden="true">&larr;</span>Back</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">

        <div class="col-md-offset-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Lodge Name</div>
                <div class="panel-body">
                    <form class="form" action="/lodges/update/{{$lodges->lodge_id}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="method" value="PUT"/>
                        <div class="form-group">
                            <input type="hidden" value="0" name="disable_enable" />
                            <input type="text" class="form-control" value="{{$lodges->lodge_name}}" name="lodge_name" placeholder="Lodge Name">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Lodge</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection