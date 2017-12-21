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
       return 'Logged in successfully';
             
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