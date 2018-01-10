
<!doctype html>
<html lang="en">
<head>

    <title>SmartMalazi</title>

    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->

    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .logout{
                color:#F5F5F5;
                margin-right:6px;
                margin-top:14px;
            }
    #brand{
        color:#F5F5F5;
    }
            #bar{
                background-color: #202224;
            }
    .hello{
        margin-right:25px;
        color:#F5F5F5;
        margin-top:16px;
    }
    .log{
        margin-top:14px;
    }
    .main-footer {
        height: 30px;
        color:#F5F5F5;
        background-color: #222222;
        margin-left: -20px;
        margin-right: -20px;
        padding-left: 20px;
        padding-right: 20px;
      } 
   
        </style>
</head>

<body>
@include('layouts.top-menu')
<div class="container">
    
    @yield('content')
    @include('layouts.footer')
</div> <!-- /container -->
<script type="text/javascript"    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
