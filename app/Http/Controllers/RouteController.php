<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $data['routes'] = Route::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.route.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.route.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'route_name' => 'required|unique:routes,route_name',
            'status' => 'required',

        ]);

        $data['route_name'] = $request->route_name;
        $data['route_description'] = $request->route_description;
        $data['status'] = $request->status;



        Route::create($data);
        session()->flash('success', 'Route Create Successfully');
        return redirect()->route('route.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        $data['route']=$route;
        return view('admin.route.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        $request->validate([
            'route_name' => "required|unique:routes,route_name,$route->id",
            'status' => 'required',

        ]);

        $data['route_name'] = $request->route_name;
        $data['route_description'] = $request->route_description;
        $data['status'] = $request->status;

        $route->update($data);
        session()->flash('success', 'Route Update Successfully');
        return redirect()->route('route.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        $route->delete();
        session()->flash('success', 'Route Deleted Successfully');
        return redirect()->route('route.index');
    }

}
