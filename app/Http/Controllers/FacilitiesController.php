<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Route;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{
    public function locate(){
        $data['routes']=Route::where('status', 'active')->orderBy('id', 'asc')->limit(4)->get();
        return view('frontend.maps', $data);

    }
    public function cityroute(){
        $data['buses']=Bus::where('status', 'active')->orderBy('id', 'asc')->limit(6)->get();
        return view('frontend.cityroute', $data);
    }
}
