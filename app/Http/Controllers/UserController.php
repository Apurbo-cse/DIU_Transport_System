<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($id){
        $data['user'] = User::where('id', $id)->first();
        //return $data;
        return view('frontend.profile', $data);
    }


    public function profileupdate(Request $request,User $user, $id)
    {
        //return $request;
        /*$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'department' => ['required', 'string', 'min:3'],
            'phone_no' => ['required', 'string', 'min:11'],
            'password' => ['required', 'string', 'min:8'],
        ]);*/


        $data = $request->except('_token', '_method', 'signup-btn');

        //$user->update($data);
        //User::updated($data);
        return redirect()->route('profile', $id);
    }


    public function ticketlist(){

        return view('frontend.ticket_list');
    }
}
