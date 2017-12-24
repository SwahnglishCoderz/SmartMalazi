<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
Use Auth;
class CustomAuthController extends Controller
{
    //
    public function showRegisterForm(){

        return view('custom.register');
    }
    
    public function register(Request $request){
        $this->validation($request);
        $request['password']=bcrypt($request->password);
        User::create($request->all());
        return redirect('/');
    }

    public function showLoginForm(){
        
        return view('custom.login');
    }
    
    public function login(Request $request){
       $this->validate($request,[
           'email'=>'required|max:255',
           'password'=>'required|max:255',
       ]);
         
       if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
           //check levels and lodgeid and redirect
           //Get the required data.
           $lodge_id = Auth::user()->lodge_id;
           $level = Auth::user()->level;

           if($level==1)
           {
               return view('admin.index');
           }
           else if($level==2)
           {
               return view('lodgeadmin.index');
           }
           else
           {
               return 'Forbidden Access to You. Please contact administrator.';
           }
       }
    }

    public function validation($request){
        return $this->validate($request,[
        'name' =>'required|max:255',
        'lastname'=>'required|max:255',
        'email' =>'required|email|unique:users|max:255',
        'password' =>'required|confirmed|max:255',
        'level' =>'required|max:255',
        'lodge_id' =>'required|max:255',
        ]);

    }
}
