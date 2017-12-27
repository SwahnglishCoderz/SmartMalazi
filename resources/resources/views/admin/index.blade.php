@extends('layouts.app')
@section('content')

<div class="container">


        <div class="jumbotron text-center">
                <h1>smartMalazi!</h1>
                <p></p>
                
                </div>
        
        
        <div class="row">

<div class="col-md-offset-4">

        @if(Auth::user()->level==1)
        
               
        <div class="links">
                <a href="{{ route('custom.register') }}">Register Lodge Admin</a>
                <a href="{{ route('lodges.index') }}">Lodges</a>
                
            </div>
        
            @endif
     
</div>


        </div>
 
                      


              
        
           
        
</div>

    
@endsection