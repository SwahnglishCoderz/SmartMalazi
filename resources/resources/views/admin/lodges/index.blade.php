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
                
                </tr>
                @if(count($lodges)>=1)
                @foreach($lodges as $lodge)
                <div class="box">
                
                    <tr>
                            <td></td>
                            <td ><a href="/admin/lodges/show/{{$lodge->lodge_id}}">{{$lodge->lodge_name}}</a></td>
                            <td style="width: 60px"><a href="/admin/lodges/edit/{{$lodge->lodge_id}}" class="btn btn-primary">Edit</a></td>
                            <td style="width: 60px"><a href="" class="btn btn-success">Enable</a></td>
                            <td style="width: 60px"><a href="" class="btn btn-danger">Delete</a></td>
                            
                    </tr>
                  @endforeach

                  </table>
                  
                </div>
                <!-- /.box-body -->
                
              </div>
    
    
    
              
              
              {{$lodges->links()}}
              @else
              <p><h1>No Lodges Found!!</h1></p>
            
              @endif
            
    
    
    
    



</div>
@endsection

