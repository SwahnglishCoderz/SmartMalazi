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
        $lodges=Lodge::orderBy('created_at','desc')->paginate(2);
        return view('admin.lodges.index')->with('lodges',$lodges);
        //$counter = 0;

       // return view('admin.lodges.index')
       // ->with('lodges',$lodges)
       // ->with('counter',$counter);
    }

    public function create()
    {
        return view('admin.lodges.create');
    }

    public function store(Request $request)
    {
        $this->validation($request);
        Lodge::create($request->all());
        return redirect('admin/lodges/index')->with('success','Lodge Added Successfully!!');
    }

    public function validation($request){
        return $this->validate($request,[
            'lodge_name' =>'required|max:190',
        ]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $lodges=Lodge::find($id);

        return view('admin.lodges.show')->with('lodges',$lodges);
    }
   

}
