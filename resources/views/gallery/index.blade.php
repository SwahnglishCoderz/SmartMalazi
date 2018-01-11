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
        <img src="#" >
        <img src="#" >
        <img src="#" >
        <img src="#" >
    </div>
@endsection

