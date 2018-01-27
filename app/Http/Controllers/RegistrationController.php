<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\Lodge;
use Mail;

class RegistrationController extends Controller
{
    public function register()
    {
        $lodges=Lodge::all();
        return view('authentication.register')
            ->with('lodges',$lodges);
    }

    public function postRegister(Request $request)
    {
        $this->validation($request);
        //$user = Sentinel::registerAndActivate($request->all());
        $user = Sentinel::register($request->all());

        $activation = Activation::create($user);

        $role = Sentinel::findRoleBySlug('lodge-admin');

        $role->users()->attach($user);

        $this->sendEmail($user,$activation->code);

        //dd($request->all());
        //dd($user);

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
