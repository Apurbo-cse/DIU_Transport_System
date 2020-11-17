@extends('layouts.frontend.master')
@section('title', 'Service')

@section('servics_css')
    <link rel="stylesheet" href="{{asset('assets/frontend/style/service-info.css')}}" />
@endsection

@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel">
        @include('layouts.frontend._slider')
    </div>
    <br><br>

    <div>
        <div class="ser">

            <div class="scard">
               @foreach($services as $service)
                    <div class="img">
                        <img src="{{asset($service->image)}}" alt="">
                    </div>

                    <div class="top-write">
                        <div class="name">{{$service->title}}</div>
                        <p>{{$service->sub_title}}</p>
                    </div>

                    <div class="bottom-write">
                        <div class="write">
                            {{Str::limit($service->description, 170)}}
                        </div>

                        <div class="serbtn">
                            <a href="#">Contact</a>
                        </div>
                    </div>
               @endforeach
            </div>

        </div><br><br>
        <br>
    </div>
    <br><br><br>
@endsection
