@extends('layouts.frontend.master')
@section('title', 'Ticket_List')
@section('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/frontend/style/co-sup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/teams.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/most_post.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/drop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/avialable.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/ak.css')}}">
@endsection

@section('content')
    <div style="width: 100%;height:50px ; background: rgb(6, 100, 121)"></div><br>
    <h1 class="ser-head">Ticket List</h1>

    <style>
        .col-sm-2 b {
            font-size: 17px;
        }
    </style>
    <div>
        <div class="tg-container">
            <div class="entry-content">
                <div class="hidden-xy">
                    <div class="row" style="font-size: 13px;">
                        <div class="col-sm-2">
                            <b>Departure</b>
                        </div>
                        <div class=" col-sm-2 ">
                            <b>Coach</b>
                        </div>
                        <div class="col-sm-2 ">
                            <b>Seat</b>
                        </div>
                        <div class="col-sm-2 ">
                            <b>Date</b>
                        </div>
                        <div class="col-sm-2 ">
                            <b>Boarding Point</b>
                        </div>
                        <div class="col-sm-2 ">
                            <b>Fare ৳</b>
                        </div>
                    </div>
                </div>
                <div class="eabzn ">
                    <div class="eabd ">
                        <div class="row " style="font-size: 13px; ">
                            <div class="col-sm-2 ">
                                <div class='bldec '>
                                    <p class='hidden-sm hidden-md hidden-lg vliss '>Departure</p>
                                    <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                    <p>DIU - City Campus</p>
                                </div>
                            </div>
                            <div class="col-sm-2 ">
                                <div class='bldec '>
                                    <p class='hidden-sm hidden-md hidden-lg vliss '>Coach</p>
                                    <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                    <p>Suryamukhi 1</p>
                                </div>
                            </div>
                            <div class="col-sm-2 ">
                                <div class='bldec '>
                                    <p class='hidden-sm hidden-md hidden-lg vliss '>Seat</p>
                                    <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                    <p>A1</p>
                                </div>
                            </div>
                            <div class="col-sm-2 ">
                                <div class='bldec '>
                                    <p class='hidden-sm hidden-md hidden-lg vliss '>Date</p>
                                    <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                    <p>10-1-2020</p>
                                </div>
                            </div>

                            <div class="col-sm-2 ">
                                <div class='bldec '>
                                    <p class='hidden-sm hidden-md hidden-lg vliss '>Boarding Point</p>
                                    <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                    <p>DIU [ 7:15 am ]</p>
                                </div>
                            </div>
                            <div class="col-sm-2 ">
                                <div class='bldec '>
                                    <p class='hidden-sm hidden-md hidden-lg vliss '>Fare ৳</p>
                                    <p class='hidden-sm hidden-md hidden-lg vsiss '> : </p>
                                    <p>25</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding: 10px ">
                <div style="background-color: #f7f7f7;margin: 50px 0;box-shadow: 0 0 3px #ccc;text-align:center " class='paywithimage '>
                    <img src="{{asset('assets/frontend/images/payment-methods.png')}}" style='max-width:600px;width:100% ' />
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('assets/frontend/js/window.js')}}"></script>
@endsection


