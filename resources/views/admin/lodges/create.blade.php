
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
<h3 class="title" align="center">Lodge Registration</h3>
</div>
<div class="box-body">

<form class="form" action="{{route('lodge.store')}}" method="post">
 {{csrf_field()}}
  
    <div class="form-group">
        <input type="hidden" value="0" name="disable_enable" />
        <input type="text" class="form-control" value="{{old('lodge_name')}}"name="lodge_name" placeholder="Lodge Name">
    </div>
    
    <button type="submit" class="btn btn-primary">Create Lodge</button>
  
</form>



</div>


</div>


</div>

</div>







</div>
</body>



</html>
@endsection