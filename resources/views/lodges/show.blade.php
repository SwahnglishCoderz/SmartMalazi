@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">
                <li class="previous" ><a href="{{ url()->previous() }}">
                        <span aria-hidden="true">&larr;</span>Back</a>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="links pull-right">
                <div class="row"> 
                    <div class="col-md-4">
                            <a href="/rooms/create/{{$lodges->lodge_id}}" style="color:#F8F8F6">Add Room</a>
                           
                </div>
                <div class="col-md-4">
                    <a href="/rooms/{{$lodges->lodge_id}}" style="color:#F8F8F6">View Rooms</a>
                       
            </div>
            <div class="col-md-4">
                    <a href="/imageupload/create/{{$lodges->lodge_id}}" style="color:#F8F8F6">Create Room Album</a>
                   
        
        </div>
            </div>
           
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered" >
                <tr>
                    <th colspan="2" style="text-align:center" >Lodge Details</th>
                </tr>
                <tr style="color:#F8F8F6"><th>Lodge Name</th><td>{{$lodges->lodge_name}}</td></tr>
                <tr><th>Date of Registration</th><td>{{$lodges->created_at}}</td></tr>
            </table>
        </div>
    </div>
@endsection