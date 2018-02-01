<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class ViewLodgeAdminTableController extends Controller
{
    //This controller will deal with managing lodges.
    public function update(Request $request, $user_id)
    {
     
        $users = DB::table('users')
        ->join('lodges', 'users.lodge_id', '=', 'lodges.lodge_id')
        ->where('users.id',$user_id)
        ->update( ['users.first_name' =>$request['first_name'],
        'users.last_name' =>$request['last_name'],
        'users.email' =>$request['email'],
        'lodges.lodge_name' =>$request['lodge_name']
        
        
        ]);
        
return back();
       
    }
    public function delete($user_id)
    {
        $users = DB::delete("DELETE FROM users WHERE id='$user_id'");
        

        return back();
    }

}
