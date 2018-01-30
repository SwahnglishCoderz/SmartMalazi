@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-1">

            <ul class="pager" style="margin-top:-3%;margin-bottom:1%;">

                <li class="previous" ><a href="/register"><span aria-hidden="true">&larr;</span>Back</a>

                </li>
            </ul>
        </div>

        <div class="links pull-right">
           <!-- <a href="{{ route('lodges.create') }}" style="color:#F8F8F6">Add Lodge</a>-->
           <a type="button" href="#" data-toggle="modal" style="color:#F8F8F6"data-target="#myModal">Add Lodge</a>
        </div>


    </div>
    
<div class="row">
    <div class="col-md-12">

            <div class="box-header with-border">
                    @if(count($lodges)>=1)
                    <h3 class="box-title" style="color:#F8F8F6">Lodges</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group pull-right">
                        <input type="text" class="search form-control" placeholder="Search">
                    </div>
                    <table class="table table-bordered" id="view_lodges">
                        <thead>
                        <tr>
                            
                            <th>Logde</th>
                            <th style="width: 60px">Edit</th>
                            <th style="width: 60px">Disable/Enable</th>
                            <th style="width: 60px">Delete</th>
            
                        </tr>
                    </thead> 
                    <tbody>
                            @foreach($lodges as $lodge)
                                <div class="box">
            
                                    <tr>
                                       
                                        <td ><a href="/lodges/show/{{$lodge->lodge_id}}" style="color:#F8F8F6">{{$lodge->lodge_name}}</a></td>
                                        <td style="width: 60px"><a href="/lodges/edit/{{$lodge->lodge_id}}" class="btn btn-primary">Edit</a></td>
                                        <td style="width: 60px"><a href="" class="btn btn-success">Enable</a></td>
                                        <td style="width: 60px"><a href="/lodges/delete/{{$lodge->lodge_id}}" class="btn btn-danger" onclick="return confirm ('Are you sure you want to delete the lodge?') ">Delete</a></td>

                                    </tr>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
            
                </div>
                <!-- /.box-body -->
            
                       
            </div>
            {{$lodges->links()}}
            @else
            <div class="row">
                    <div class="col-md-offset-4 col-md-4"> 
                    <div class="alert alert-info">
                    <strong>Info!</strong>Sorry No Lodges Present At the Moment.
                  </div>
                </div>
                </div>
            @endif
    </div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content" id="modal">
            <div class="modal-header">
              <button type="button" class="close" style="color:#FFF"data-dismiss="modal">&times;</button>
              <h4 class="modal-title"style="color:#F8F8F6">Add Lodge</h4>
            </div>
            <div class="modal-body">
                    <form class="form" action="{{route('lodges.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="hidden" value="0" name="disable_enable" />
                                <input type="text" class="form-control" value="{{old('lodge_name')}}"name="lodge_name" required placeholder="Lodge Name">
                            </div>
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                                    <input type="submit" value="Add Lodge" class="btn btn-success pull-right">
                             </div>
                        </form>
            </div>
            
          </div>
      
        </div>
      </div>



    <script>
            $(document).ready(function(){
                $('.search').on('keyup',function(){
                    var searchTerm = $(this).val().toLowerCase();
                    $('#view_lodges tbody tr').each(function(){
                        var lineStr = $(this).text().toLowerCase();
                        if(lineStr.indexOf(searchTerm) === -1){
                            $(this).hide();
                        }else{
                            $(this).show();
                        }
                    });
                });
            });
            </script>

@endsection

