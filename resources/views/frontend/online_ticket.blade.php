@extends('layouts.frontend.master')
@section('title', 'Home')
@section('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/style/bokcss.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/style/co-sup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/most_post.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/drop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/locate.css')}}">

@endsection

@section('content')

    <div style="width: 100%;height:50px ; background: rgb(6, 100, 121)">
    </div>


    <div id="booking" class="boksection">
        <div class="boksection-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="booking-cta">
                            <h1>DIU Online Bus Ticket Booking</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
                                Perspiciatis.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-7">
                        <div class="booking-form">
                            <form>

                                <div class="bokform-group">
                                    <span class="bokform-label">Destination From</span>
                                    <select name="destination_from" id="destination_from" class="form-control" required>
                                        <option value="" style="display: none" selected>Select Route</option>
                                        @foreach($routes as $from)
                                            <option @if(old('destination_from') == $from->id) selected @endif value="{{ $from->id }}">{{$from->destination_from}}</option>
                                        @endforeach
                                    </select>
                                    @error('destination_from')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <span class="bokselect-arrow"></span>
                                </div>
                                <div class="bokform-group">
                                    <span class="bokform-label">Destination To</span>
                                    <select name="destination_to" id="destination_to"  class="form-control" required>
                                        <option value="" style="display: none" selected >Select Route</option>
                                        @foreach($routes as $to)
                                            <option @if(old('destination_to') == $to->id) selected @endif value="{{ $to->id }}">{{$to->destination_to}}</option>
                                        @endforeach
                                    </select>
                                    <span class="bokselect-arrow"></span>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="bokform-group">
                                            <span class="bokform-label">Date</span>
                                            <input class="form-control" id="minmaxdate" min="2020-11-21" max="2020-11-30" style="width: 160px;" type="date" required>
                                        </div>
                                    </div>
                                </div>
                                <button class="bokbtn"><a href="{{route('available_bus')}}" style="color: #fff;">Check availability</a> </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        var now = new Date();
        var xday = now.getDate();
        var xmonth = now.getMonth()+1;
        var xyear = now.getFullYear();
        var x = xyear+ "-" + xmonth + "-" +xday;
        if(xmonth == 12){
            var xmaxday = 1;
            var xyear = xyear +1;
            var y = xyear+ "-" + xmaxday + "-" +xday;
        }
        else{
            var xmaxday = xmonth + 1;
            var y = xyear+ "-" + xmaxday + "-" +xday;

        }
        document.querySelector("#minmaxdate").setAttribute("min",x);
        document.querySelector("#minmaxdate").setAttribute("max",y);
    </script>
    <script src="{{asset('assets/frontend/js/window.js')}}"></script>
@endsection


