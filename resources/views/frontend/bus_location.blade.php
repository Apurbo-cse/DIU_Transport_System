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
    <div style="width: 100%;height:50px ; background: rgb(6, 100, 121)">
    </div>

    <section class="our-servicesq " id="locate Route " style=" font-family: Raleway-regular ; ">
        <div class="containerq ">
            <h1 class="section-headingq ">City Campus Route</h1>
            <div>
                <div class="service-cardq ">
                    <h2>Suryamukhi 1</h2>
                    <button class=" btnq btnq-secondary "><a href="sms:+8801732955937 ">Track</a> </button>
                    <button class=" btnq btnq-secondary "><a href="tel:+8801732955937 ">Call</a> </button>
                    <button class=" btnq btnq-secondary "><a href="sms:+8801732955937 ">Voice On</a> </button>
                    <button class=" btnq btnq-secondary "><a href="sms:+8801732955937 ">Voice Off</a> </button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{asset('assets/frontend/js/window.js')}}"></script>
@endsection




