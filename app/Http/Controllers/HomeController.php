<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['sliders'] = Slider::where('status', 'active')->get();

        $data['videos'] = Video::where('status', 'active')->limit(1)->get();

        return view('frontend.home', $data);
    }
}
