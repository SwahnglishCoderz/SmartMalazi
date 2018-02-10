<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lodge;
use App\RoomDetail;
use App\RoomGallery;
use Image;
class AddPictureModelController extends Controller
{
    //
    public function create($lodge_id)
    {
        $lodges=Lodge::find($lodge_id);
        $rooms=RoomDetail::orderBy('room_id','desc')->where('lodge_id', $lodge_id)->get();
        return view('imageupload.create')->with(['rooms'=>$rooms,'lodges'=>$lodges]);

    }
public function store(Request $request){
    $this->validation($request);

  $photo=new RoomGallery;

   $photo->room_id=$request->room_id;
   $photo->lodge_id=$request->lodge_id;
   $photo->picture_caption=$request->picture_caption;

  if($request->hasFile('room_picture')){
  $image=$request->file('room_picture');
  $filename=time().'.'.$image->getClientOriginalExtension();
  $location=$location='images/'.$filename;
  Image::make($image)->resize(800,400)->save($location);
  $photo->room_picture=$filename;
}

   $photo->save();
   return back()
       ->with('success','Image Added successfully.');
}

public function validation($request)
{
    return $this->validate($request,[
        'picture_caption' =>'required|max:190',
        'room_picture' =>'required',

    ]);
}
}
