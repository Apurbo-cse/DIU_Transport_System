<?php

namespace App\Http\Controllers;

use App\Route;
use App\Schedule;
use Illuminate\Http\Request;

class TicketController extends Controller
{
   public function ticket(){
       $data['routes']=Route::where('status', 'active')->orderBy('route_name')->get();
       return view('frontend.online_ticket', $data);
   }

    public function availablebus(Request $request){
       $data['rout']=$request->route;
       $data['date']=$request->date;
        $data['buses']=Schedule::where('status', '1')
            ->where('route_id', $request->route)
            ->where('date', $request->date)
            ->orderBy('bus_id')->get();
        //return $data;
       return view('frontend.available_bus', $data);
    }

    public function buslocation(){

        return view('frontend.bus_location');

    }

    public function seat($id){
        $data['bus']=Schedule::where('id', $id)->first();
        //return $data['bus']->bus_id;
        return view('frontend.seat', $data);
    }

    public function passangerinfo(Request $request){

       //return $request;
        $cart =  session()->get('cart');

        if (!$cart){
            return redirect()->back()->with('Error', "Select Minimum one seat");
        }
        $data['passangeinfo']= $request;
        return view('frontend.passanger_info', $data);

    }
}
