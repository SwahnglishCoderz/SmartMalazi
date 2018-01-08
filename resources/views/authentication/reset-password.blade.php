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
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> Change your Password </h3>
                </div>

                <div class="panel-body">
                    <form action="" method="POST">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach( $errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>

                            </div>
                        @endif
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                                <input type="password" name="password" class="form-control" placeholder="New Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Update Password" class="btn btn-success pull-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

