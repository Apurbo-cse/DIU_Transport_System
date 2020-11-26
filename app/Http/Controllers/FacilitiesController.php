<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Route;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    public function locatebus(){
        $data['routes']=Route::where('status', 'active')->orderBy('id', 'asc')->limit(4)->get();
        return view('frontend.locate_bus', $data);

    }
    public function cityroute(){
        $data['buses']=Bus::where('status', 'active')->orderBy('id', 'asc')->limit(5)->get();
        return view('frontend.cityroute', $data);
    }
}
