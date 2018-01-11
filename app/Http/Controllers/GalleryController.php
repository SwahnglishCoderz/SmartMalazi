<?php

namespace App\Http\Controllers;

use App\RoomDetail;
use Illuminate\Http\Request;
use App\RoomGallery;

class GalleryController extends Controller
{
    public function index($room_id)
    {
        $gallery = RoomDetail::find($room_id);
        return view('gallery.index')
            ->with('gallery',$gallery);
    }
}
