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
                    <form class="form" action="/lodges/update/{{$lodges->lodge_id}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="method" value="PUT"/>
                        <div class="form-group">
                            <input type="hidden" value="0" name="disable_enable" />
                            <input type="text" class="form-control" value="{{$lodges->lodge_name}}" name="lodge_name" placeholder="Lodge Name">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Update Lodge" class="btn btn-success pull-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection