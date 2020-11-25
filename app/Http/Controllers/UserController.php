<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        return view('frontend.profile');
    }

    public function ticketlist(){

        return view('frontend.ticket_list');
    }
}
