
<!doctype html>
<html lang="en">
<head>

    <title>SmartMalazi</title>

    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
        <!-- References: https://github.com/fancyapps/fancyBox -->
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    
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
      .gallery
      
          {
      
              display: inline-block;
      
              margin-top: 20px;
      
          }
      
          .close-icon{
      
              border-radius: 50%;
      
              position: absolute;
      
              right: 5px;
      
              top: -10px;
      
              padding: 5px 8px;
      
          }
      
          
        </style>
</head>

<body>
@include('layouts.top-menu')
<div class="container">
    
    @yield('content')
    @include('layouts.footer')
</div> <!-- /container -->
</body>

<script type="text/javascript">
    
        $(document).ready(function(){
    
            $(".fancybox").fancybox({
    
                openEffect: "none",
    
                closeEffect: "none"
    
            });
    
        });
    
    </script>
</html>
