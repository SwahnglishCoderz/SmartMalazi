<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lodge;

class LodgeController extends Controller
{
    //This controller will deal with managing lodges.

    public function index()
    {
        //$lodges = Lodge::where('user_id',Auth::user()->id)->get();
        $lodges = Lodge::all();
        $counter = 0;

        return view('admin.lodges.index')
        ->with('lodges',$lodges)
        ->with('counter',$counter);
    }

    public function create()
    {
        return view('admin.lodges.create');
    }

    public function store(Request $request)
    {
        $this->validation($request);
        Lodge::create($request->all());
        return redirect('/');
    }

    public function validation($request){
        return $this->validate($request,[
            'lodge_name' =>'required|max:190',
        ]);

    }
}
