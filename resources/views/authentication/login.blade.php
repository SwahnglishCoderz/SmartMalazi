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
        }
#main-footer{
    color:#ABABAB;
}
#logo{
    color:#EAE9E4;
}
#panel{
    color:#EAE9E4;
}
    </style>





</head>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                        <h1 class="welcome text-center" style="line-height: 0.6;" id="logo">
                           SmartMalazi  <small id="panel"> admin panel</small><i class="fa fa-home"></i></span></h1>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> Login </h3>
                </div>

                <div class="panel-body">
                    <form id="login-form" action="{{route('login.visitors')}}" method="POST">
                        {{ csrf_field() }}

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                                <input type="email" name="email" class="form-control" placeholder="example@server.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="checkbox" name="remember_me" placeholder="Password"> Remember Me
                            </div>
                        </div>

                        <a href="/forgot-password"> Forgot your password? </a>

                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-success pull-right">
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
