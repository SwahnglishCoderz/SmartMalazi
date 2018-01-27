@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-1">
            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">
                <li class="previous" >
                    <a href="{{ url()->previous() }}"><span aria-hidden="true">&larr;</span>Back</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-4 col-md-4">
                <div class="panel" id="form">
                        <div class="panel-heading">
                    <h3 class="panel-title" align="center" style="color:#F8F8F6">Lodge Registration</h3>
                </div>
                <div class="panel-body">
                                                                    
                    <form class="form" action="{{route('lodges.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="hidden" value="0" name="disable_enable" />
                            <input type="text" class="form-control" value="{{old('lodge_name')}}"name="lodge_name" placeholder="Lodge Name">
                        </div>
                        <button type="submit" class="btn btn-success pull-right">Create Lodge</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection