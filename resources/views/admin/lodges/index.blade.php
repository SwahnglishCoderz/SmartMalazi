@extends('layouts.app')
@section('content')

<div class="container">

  
  

    <div class="row">
        <div class="col-md-1">
        
            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">
                <li class="previous" ><a href="{{route('admin.index')}}"><span aria-hidden="true">&larr;</span>Back</a>
              </li>				
              </ul>
        </div>
        
        <div class="col-md-2">
            
            <div class="links">
                <a href="{{ route('lodges.create') }}">Add Lodge</a>
               
                
            </div>
            </div>
        
        
        </div>

        @if(count($lodges)>=1)
        @foreach($lodges as $lodge)
        <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Lodges</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                   
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Logde</th>
                      <th style="width: 60px">Edit</th>
                      <th style="width: 60px">Disable/Enable</th>
                      <th style="width: 60px">Delete</th>
                      <th style="width: 60px">View</th>
                    </tr>
                    <tr>
                            <td></td>
                            <td >{{$lodge->lodge_name}}</d>
                            <td style="width: 60px"><a href="" class="btn btn-success">Edit</a></td>
                            <td style="width: 60px"><a href="" class="btn btn-success">Enable</a></td>
                            <td style="width: 60px"><a href="" class="btn btn-danger">Delete</a></td>
                            <td style="width: 60px"><a href="" class="btn btn-success">View</a></td>
                    </tr>
                  </table>
                  @endforeach
                  
                </div>
                <!-- /.box-body -->
                
              </div>
    
    
    
              
              
              {{$lodges->links()}}
              @else
              <p><h1>No Lodges Found!!</h1></p>
            
              @endif
            
    
    
    
    



</div>
@endsection

