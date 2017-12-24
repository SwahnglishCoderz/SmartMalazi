@extends('layouts.app')
@section('content')

    <div>
        <a href="{{ route('lodge.create') }}">Add Lodge</a>
        <!--<a href="#">Edit Lodge</a> -->
    </div>
    <div>
        <p>Lodges List</p> 
    </div>

    <table>
    <tr>
        <th>S/N</th>
        <th>Table Name</th>
    </tr>
    @foreach ($lodges as $lodge)
    <tr>
        <td>
            {{($counter + 1)}}
        </td>
        <td>
            {{$lodge->lodge_name}}
        </td>
    </tr>
    @endforeach
    </table>
@endsection