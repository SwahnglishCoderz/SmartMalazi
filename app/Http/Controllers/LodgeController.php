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
        return view('lodges.index')->with('lodges',$lodges);
    }

    public function create()
    {
        return view('lodges.create');
    }

    public function store(Request $request)
    {
        $this->validation($request);
        Lodge::create($request->all());
        return redirect('lodges/index')->with('success','Lodge Added Successfully!!');
    }

    public function validation($request)
    {
        return $this->validate($request,[
            'lodge_name' =>'required|max:190',
        ]);
    }


    
    public function show($id)
    {
        $lodges=Lodge::find($id);

        return view('lodges.show')->with('lodges',$lodges);
    }
   

    public function edit($id)
    {
        $lodges=Lodge::find($id);

        return view('lodges.edit')->with('lodges',$lodges);
    }


    public function update(Request $request, $id)
    {
     
        $this->validate($request,[
            //add validation here.
        ]);

        $lodges=Lodge::find($id);

        $lodges->lodge_name=$request->lodge_name;

        $lodges->save();

        return redirect('lodges/index')->with('success','Lodge name Edited');
    }

}
