@extends('layouts.frontend.master')
@section('title', 'Ticket_List')
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

    <div class="container">
        <div class="row" style="margin-bottom: 145px;">
            <div class="col-md-12">
                <div class="page">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <h2 style="color: rgba(255, 255, 255, 0);">DIU Transport Schedule</h2>
                        </div>

                    </div>

                    <h2 style="color: rgb(8, 43, 88);text-align: center;">DIU Transport Ticket List</h2> <br>
                    <table class="table table-bordered" style="font-size: 14px;">

                        <tr style="background-color:#066479; ;color: rgb(252, 250, 250);">
                            <th>Sl No</th>
                            <th>Route</th>
                            <th>Depture Time</th>
                            <th>Seat</th>
                            <th>Far Cost</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>Daffodil International University</td>
                            <td>10:00 AM, 20-09-2020 </td>
                            <td>1</td>
                            <td>25 TK</td>
                        </tr>

                    </table>

                    <div class="row" style="color: tomato;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            A journey is safe and lowest time in your life by bus at Daffodil International university .
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br>
@endsection

@section('script')
    <script src="{{asset('assets/frontend/js/window.js')}}"></script>
@endsection


