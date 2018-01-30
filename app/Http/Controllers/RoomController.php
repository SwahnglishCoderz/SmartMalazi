<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lodge;
use App\RoomDetail;

class RoomController extends Controller
{
    public function index($lodge_id)
    {
        $rooms=RoomDetail::orderBy('room_id','desc')->where('lodge_id', $lodge_id)->paginate(4);

        $lodges=Lodge::find($lodge_id);

        return view('rooms.index')
            ->with(['rooms' => $rooms,'lodges' => $lodges]);
    }

    public function create($lodge_id)
    {
        $lodges=Lodge::find($lodge_id);

        return view('rooms.create')->with('lodges',$lodges);
    }

    public function store(Request $request)
    {
        $this->validation($request);
        RoomDetail::create($request->all());
        //return redirect('rooms.addrooms')->with('success','Lodge Added Successfully!!');
        return redirect('/lodges/show/'.$request->lodge_id)->with('success','Room Added Successfully!!');
    }

    public function validation($request)
    {
        return $this->validate($request,[
            'room_name' =>'required|max:190',
            'price' =>'required|max:190',
            'room_status' =>'required|max:190',
        ]);
    }

    public function edit($lodge_id,$room_id)
    {
        $lodges=Lodge::find($lodge_id);
        $rooms=RoomDetail::find($room_id);

        return view('rooms.edit')->with(['lodges'=>$lodges,'rooms'=>$rooms]);
    }

    public function update(Request $request, $lodge_id,$room_id)
    {

        $this->validate($request,[
            //add validation here.
        ]);

        $rooms=RoomDetail::find($room_id);

        $rooms->lodge_id=$request->lodge_id;
        $rooms->room_name=$request->room_name;
        $rooms->price=$request->price;
        $rooms->room_status=$request->room_status;

        $rooms->save();

        return redirect('/rooms/'.$lodge_id)->with('success','Room Updated Successfully');
    }

    public function delete($lodge_id,$room_id)
    {
        RoomDetail::destroy($room_id);

        return redirect('/rooms/'.$lodge_id)->with('success','Room deleted successfully');
    }

   
}
