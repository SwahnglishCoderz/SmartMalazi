

@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-offset-3 col-md-6">

@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>

@endforeach
@endif


<div class="box box-primary">
<div class="box-header">
<h3 class="title" align="center">Login</h3>
</div>
<div class="box-body">

<form class="form" action="{{route('custom.login')}}" method="post">
 {{csrf_field()}}
<div class="form-group">
      
      <input type="text" class="form-control" value="{{old('email')}}"name="email" placeholder="Email">
    </div>

    <div class="form-group">
      
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  
</form>



</div>


</div>


</div>

</div>







</div>
@endsection
