<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        $data['users'] = User::orderBy('id', 'desc')->limit(1)->get();
        return view('frontend.profile', $data);
    }

    public function ticketlist(){

        return view('frontend.ticket_list');
    }
}
