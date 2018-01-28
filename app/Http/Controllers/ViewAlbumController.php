<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lodge;
use App\RoomDetail;
use App\RoomGallery;
class ViewAlbumController extends Controller
{
    public function index($lodge_id,$room_id)
    {
        $lodges=Lodge::find($lodge_id);
        $rooms=RoomDetail::find($room_id);
        $galleries=RoomGallery::orderBy('gallery_id','desc')->where('room_id', $room_id)->get();
        return view('album.index')->with(['lodges'=>$lodges,'rooms'=>$rooms,'galleries'=> $galleries]);
    }


    public function delete($id)
    
        {
    
            RoomGallery::find($id)->delete();
    
            return back()
    
                ->with('success','Image removed successfully.');	
    
        }

}
