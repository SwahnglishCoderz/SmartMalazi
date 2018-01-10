@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-1">

            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">

                <li class="previous" ><a href="/admin"><span aria-hidden="true">&larr;</span>Back</a>

                </li>
            </ul>
        </div>

        <div class="links pull-right">
            <a href="{{ route('lodges.create') }}">Add Lodge</a>
        </div>


    </div>
    
<div class="row">
    <div class="col-md-12">

            <div class="box-header with-border">
                    @if(count($lodges)>=1)
                    <h3 class="box-title">Lodges</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                   
                    <table class="table table-bordered">
                        <tr>
                            
                            <th>Logde</th>
                            <th style="width: 60px">Edit</th>
                            <th style="width: 60px">Disable/Enable</th>
                            <th style="width: 60px">Delete</th>
            
                        </tr>
                       
                            @foreach($lodges as $lodge)
                                <div class="box">
            
                                    <tr>
                                       
                                        <td ><a href="/lodges/show/{{$lodge->lodge_id}}">{{$lodge->lodge_name}}</a></td>
                                        <td style="width: 60px"><a href="/lodges/edit/{{$lodge->lodge_id}}" class="btn btn-primary">Edit</a></td>
                                        <td style="width: 60px"><a href="" class="btn btn-success">Enable</a></td>
                                        <td style="width: 60px"><a href="/lodges/delete/{{$lodge->lodge_id}}" class="btn btn-danger" onclick="return confirm ('Are you sure you want to delete the lodge?') ">Delete</a></td>

                                    </tr>
                                </div>
                            @endforeach
                    </table>
            
                </div>
                <!-- /.box-body -->
            
                       
            </div>
            {{$lodges->links()}}
            @else
                <p>
                    <h1>No Lodges Found!!</h1>
                </p>
            @endif
    </div>
@endsection

