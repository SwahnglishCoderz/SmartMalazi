<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lodge;
use App\RoomDetail;
class RoomController extends Controller
{

   

    public function create($id)
    {

        $lodges=Lodge::find($id);

        return view('rooms.addrooms')->with('lodges',$lodges);
    }


    public function store(Request $request)
    {
        $this->validation($request);
        RoomDetail::create($request->all());
        return redirect('rooms.addrooms')->with('success','Lodge Added Successfully!!');

    }
    public function validation($request)
    {
        return $this->validate($request,[
            'room_name' =>'required|max:190',
            'price' =>'required|max:190',
            'room_status' =>'required|max:190',
        ]);
    }
   
}
