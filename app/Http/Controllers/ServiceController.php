<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
        $data['services'] = Service::where('status', 'active')->get();
        return view('frontend.service', $data);
    }

    public function transportinfo(){

        return view('frontend.transportinfo');

    }
}
