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
                        <h3 class="panel-title"> Register Lodge Admin</h3>
                    </div>

                    <div class="panel-body">
                        <form action="/register" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                                    <input type="email" name="email" class="form-control" placeholder="example@server.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-level-up"></i></span>

                                    <select  class="form-control" name="level">
                                        <option >--Select level--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bed"></i></span>

                                    <select  class="form-control" name="lodge_id">
                                        <option >--Select lodge--</option>
                                        <option value="1">whitehouse</option>
                                        <option value="2">Melisa</option>
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
