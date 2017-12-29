
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

    <!-- Styles -->
    <style>
            html, body {
                background-color: #312F33;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
    

    
        </style>
</head>
<body>
    
<div class="container">

    


<div class="row">

<div class="col-md-offset-4 col-md-4">
    <h1 class="welcome text-center" style="line-height: 0.6;"><span style="margin-left: -45px;">Welcome to</span><br />
      smartMalazi <small>admin panel</small></h1>
    <div class="panel" style="margin-top:20%">
<div class="panel-heading" align="center">Login</div>
<div class="panel-body">
        <form class="form" action="{{route('custom.login')}}" method="post">
         {{csrf_field()}}
        <div class="form-group">
              
              <input type="text" class="form-control" value="{{old('email')}}"name="email" placeholder="Email">
            </div>
        
            <div class="form-group">
              
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary" >Login</button>
          
        </form>
        
      
        
    
         
     
    </div>
    
</div>
<footer class="footer" >
    <strong>Copyright &copy; 2017 <a href="#">smartMalazi</a>.</strong> All rights reserved.
  </footer>
  @include('inc.messages')


</div>
    </div>


</div>




    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>






</body>

</html>
