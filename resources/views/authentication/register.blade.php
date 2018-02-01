<?php
/**
 * Created by PhpStorm.
 * User: JuneX05
 * Date: 31/12/2017
 * Time: 20:21
 */
?>

@extends('layouts.master')

@section('contentregister')
        <div class="row">
                <div class="col-md-4">

                        <ul class="pager" style="margin-top:-3%;margin-bottom:3%;">
                                <li class="previous"><a href="#" onclick="history.go(-1)"><span aria-hidden="true">&larr;</span>Back</a>
                                </li>
                            </ul>
                </div>
            </div>
            <div class="row">
            <div class="col-md-4">
                   
                <div class="panel" id="form">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="color:#F8F8F6"> Register Lodge Administrator</h3>
                    </div>

                    <div class="panel-body">
                        <form action="/register" method="POST">
                            {{ csrf_field() }}

                            @include('messages.messages')

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>


                                    <input type="email" name="email" class="form-control" placeholder="example@server.com" value="{{ old('email') }}" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>


                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ old('first_name') }}" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>


                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ old('last_name') }}" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" value="{{ old('password_confirmation') }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bed"></i></span>

                                    <select  class="form-control" name="lodge_id"  required>

                                        <option>--Select lodge--</option>
                                        @foreach($lodges as $lodge)
                                            <option value="{{$lodge->lodge_id}}" @if($lodge->lodge_id == old('lodge_id')) selected = "selected" @endif>{{$lodge->lodge_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Register" class="btn btn-success pull-right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        @if(count($lodges)>=1)
                            <div class="row"><div class="col-md-offset-3 col-md-7"><h3 class="box-title" style="color:#F8F8F6">Lodge Administrators</h3></div></div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group pull-right">
                                <input type="text" class="search form-control" placeholder="Search">
                            </div>
                            <table class="table table-bordered" id="view_lodges">
                                <thead>
                                <tr>
                                    
                                    <th>Admin</th>
                                    <th>Lodge</th>
                                    <th>Email Address</th>
                                    <th style="width: 60px">Edit</th>
                                   
                                    <th style="width: 60px">Delete</th>
                    
                                </tr>
                            </thead> 
                            <tbody>
                                @foreach($users as $user) 
                                        <div class="box">
                    
                                            <tr>
                                               
                                                <td ><span style="color:#F8F8F6" >{{$user->first_name}} {{$user->last_name}}</span></td>
                                                <td ><span style="color:#F8F8F6"> {{$user->lodge_name}} </span></td>
                                                <td ><span style="color:#F8F8F6">{{$user->email}}</span></td>
                                                <td style="width: 60px"><a href="#" data-toggle="modal" style="color:#F8F8F6"data-target="#myModal{{$user->id}}" class="btn btn-primary">Edit</a></td>
                                                
                                                <td style="width: 60px"><a href="/delete/{{$user->id}}" onclick="return confirm ('Are you sure you want to delete {{$user->first_name}} {{$user->last_name}}?') " class="btn btn-danger">Delete</a></td>
        
                                            </tr>
                                        </div>
                                        <div id="myModal{{$user->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog" >
                
                                                <!-- Modal content-->
                                                <div class="modal-content" id="modal">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" style="color:#FFF"data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title"style="color:#F8F8F6">Edit Admin Details</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        





                                                        <form action="/update/{{$user->id}}" method="POST">
                                                            {{ csrf_field() }}
                                                        
                                                            
                                                        
                                        
                                                
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        
                                                                    <input type="text" name="first_name" class="form-control" value="{{$user->first_name}}" required>
                                                        
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        
                                                                    <input type="text" name="last_name" class="form-control" value="{{$user->last_name}}"  required>
                                                        
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-bed"></i></span>
                                                        
                                                                    <input type="text" name="lodge_name" class="form-control" value="{{$user->lodge_name}}"  required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        
                                                                    <input type="text" name="email" class="form-control" value="{{$user->email}}"  required>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                                                                <input type="submit" value="Update" class="btn btn-success pull-right">
                                                         </div>
                                                        </form>
                                                        
                                                    </div>
                
                                                </div>
                
                                            </div>
                                        </div>
                                        @endforeach
                                </tbody>
                            </table>
                    
                        </div>
                </div>
                            
                                <!-- /.box-body -->
                            
                               
                            </div>
                            {{$users->links()}}
                            @else
                            <div class="row">
                                    <div class="col-md-offset-4 col-md-4"> 
                                    <div class="alert alert-info">
                                    <strong>Info!</strong>Sorry No Lodges Present At the Moment.
                                  </div>
                                </div>
                                </div>
                                @endif      
        </div>
        <script>
            $(document).ready(function(){
                $('.search').on('keyup',function(){
                    var searchTerm = $(this).val().toLowerCase();
                    $('#view_lodges tbody tr').each(function(){
                        var lineStr = $(this).text().toLowerCase();
                        if(lineStr.indexOf(searchTerm) === -1){
                            $(this).hide();
                        }else{
                            $(this).show();
                        }
                    });
                });
            });
            </script>
@endsection
