@extends('layouts.frontend.master')
@section('title', 'Home')
@section('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/sup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/co-sup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/teams.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/most_post.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/drop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/locate.css')}}">

@endsection


@section('content')
    <div style="width: 100%;height:50px ; background: rgb(6, 100, 121)"></div>



    <body style="background-color:rgb(221, 221, 221);">
    <div id="supervisor">
        <div class="supervisor cons">

            <div class="col-left">
                <div class="supervisor-img">
                    <img src="{{asset('assets/frontend/images/team/mijanur.jpg')}}" alt="img">
                </div>
            </div>
            <div class="col-right">
                <h1 class="sup-title">Profi<span>le</span></h1>
                <h2>
                    Mizanur Rahaman Raihan
                </h2>
                <br>
                <div>
                    <p class="pro-type">ID : 171-X-19XX</p>
                    <p class="pro-type">Department of CSE</p>
                    <p class="pro-type">Email : mizanurx-19xx@diu.edu.bd</p>
                    <p class="pro-type">Daffodil International University</p>
                </div>
            </div>
        </div>
    </div>
    </body>

    <br><br>

@endsection


@section('script')
    <script src="{{asset('assets/frontend/js/window.js')}}"></script>
@endsection


