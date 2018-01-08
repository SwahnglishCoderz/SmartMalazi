@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-1">
            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">
                <li class="previous" >
                    <a href="{{route('lodges.index')}}"><span aria-hidden="true">&larr;</span>Back</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="title" align="center">Lodge Registration</h3>
                </div>
                <div class="box-body">
                    <form class="form" action="{{route('lodges.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="hidden" value="0" name="disable_enable" />
                            <input type="text" class="form-control" value="{{old('lodge_name')}}"name="lodge_name" placeholder="Lodge Name">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Lodge</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection