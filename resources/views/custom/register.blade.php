
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
<h3 class="title" align="center">Lodge Admin Registration</h3>
</div>
<div class="box-body">

<form class="form" action="{{route('custom.register')}}" method="post">
 {{csrf_field()}}
  
    <div class="form-group">
      <input type="text" class="form-control" value="{{old('fname')}}"name="name" placeholder="First Name">
    </div>
    
   <div class="form-group">
      
      <input type="text" class="form-control" value="{{old('lname')}}" name="lastname" placeholder="Last Name">
    </div>

<div class="form-group">
      
      <input type="text" class="form-control" value="{{old('email')}}"name="email" placeholder="Email">
    </div>

    <div class="form-group">
      
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group">
      
      <input type="password" class="form-control"  name="password_confirmation" placeholder="Confirm Password">
    </div>
    <div class="form-group">
      
      <select  class="form-control" name="level">
      <option >--Select level--</option>
       <option value="1">1</option>
        <option value="2">2</option>
      
      </select>
    </div>
    <div class="form-group">
      <select  class="form-control" name="lodge_id">
      <option >--Select lodge--</option>
       <option value="1">whitehouse</option>
        <option value="2">Melisa</option>
      
      </select>
      
    </div>
     
      
    
    <button type="submit" class="btn btn-primary">Register</button>
  
</form>



</div>


</div>


</div>

</div>







</div>











</body>



</html>
@endsection