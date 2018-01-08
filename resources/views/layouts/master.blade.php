
<!doctype html>
<html lang="en">
<head>

    <title>Authentication</title>

    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/narrow-jumbotron.css') }}" rel="stylesheet">
</head>

<body>

<div class="container">
    @include('layouts.top-menu')
    @yield('content')
</div> <!-- /container -->
</body>
</html>
