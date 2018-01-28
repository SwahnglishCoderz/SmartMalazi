<?php
/**
 * Created by PhpStorm.
 * User: JuneX05
 * Date: 31/12/2017
 * Time: 20:21
 */
?>
<!doctype html>
<html lang="en">
<head>

    <title>SmartMalazi</title>

    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/narrow-jumbotron.css') }}" rel="stylesheet">

    <style>
        html, body {
            background-color: #222222;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            background: transparent url("/images/p.jpg");
        }

        #main-footer{
            color:#ABABAB;
        }
        #logo{
            color:#EAE9E4;
        }
       
        #b{
            background:#414C5F;
        }

    </style>


</head>
<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <h1 class="welcome text-center" style="line-height: 0.6;" id="logo">
                                SmartMalazi  <i class="fa fa-home"></i></span></h1>
                    <div class="panel" id="b">
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
                    <footer class="footer" id="main-footer">
                            <strong>Copyright &copy; 2017 <a href="#">smartMalazi</a>.</strong> All rights reserved.
                          </footer>
                </div>
            </div>

</div>
    


</html>
