<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lodge;
use App\RoomDetail;
class CreateAlbumController extends Controller
{
    //
    public function create($lodge_id)
    {
        
        $rooms=RoomDetail::orderBy('room_id','desc')->where('lodge_id', $lodge_id)->get();
        return view('imageupload.create')->with('rooms',$rooms);
            
    }

}
