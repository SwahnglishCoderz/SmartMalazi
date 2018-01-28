<?php
/**
 * Created by PhpStorm.
 * User: JuneX05
 * Date: 31/12/2017
 * Time: 20:21
 */
?>

@extends('layouts.master')

@section('content')
        <div class="row">
                <div class="col-md-4">

                        <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">
                                <li class="previous"><a href="#" onclick="history.go(-1)"><span aria-hidden="true">&larr;</span>Back</a>
                                </li>
                            </ul>
                </div>
            </div>
            <div class="row">
            <div class="col-md-offset-4 col-md-4">
                   
                <div class="panel" id="form">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="color:#F8F8F6"> Register Lodge Admin</h3>
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
        </div>
@endsection
