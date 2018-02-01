<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use DB;
use App\Lodge;

use Mail;

class RegistrationController extends Controller
{
    public function register()
    {
        $lodges=Lodge::all();
      

        $users = DB::table('users')
        ->join('lodges', 'users.lodge_id', '=', 'lodges.lodge_id')
        ->select('users.id','users.lodge_id', 'users.email', 'users.first_name', 'users.last_name', 'lodges.lodge_name')
        ->paginate(4);
      
        return view('authentication.register')
            ->with(['lodges'=>$lodges,'users'=>$users]);
    }

    public function postRegister(Request $request)
    {
        $this->validation($request);

       
        $user = Sentinel::register($request->all());

        $activation = Activation::create($user);

        $role = Sentinel::findRoleBySlug('lodge-admin');

        $role->users()->attach($user);

        $this->sendEmail($user,$activation->code);

       

        return redirect('/register')->with('success','Lodge Administrator Added Successfully.');
    }

    private function sendEmail($user,$code)
    {
        Mail::send('email.activation',[
           'user' => $user,
            'code' => $code
        ], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject("Hello $user->first_name, activate your SmartMalazi Account.");
        });
    }
    public function validation($request)
    {
        return $this->validate($request,[
            'email' => 'email',
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'password' => 'required|confirmed|min:6',
        ]);
    }
}
