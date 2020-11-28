@extends('layouts.frontend.master')
@section('title', 'Trnasport Info')
@section('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/frontend/style/co-sup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/most_post.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/drop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/avialable.css')}}">

@endsection


@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel">
        @include('layouts.frontend._slider')
    </div>

    <div id="content" class="site-content">
        <div class="tg-container">
            <div class="eabzn">
                <div class="eabd">

                    <div class="row" style="margin-left: 30px; margin-right: 30px;">
                        <p>&nbsp;</p>
                        <h3>Introduction:</h3>
                        <p style="text-align: justify;">
                        <p>Transportation is a big problem for both students and parents. Most university students are mature enough to travel to their own campus. Students use public transport from different places. DIU has always been concerned for
                            their students and now we have around 50+ buses which are used only for our students / faculty / administrative staff and staff. A parent car and an ambulance are available for students and their parents. Total transport
                            is operated from our Ashulia campus. Ashulia is working on different routes from campus to campus for students of different transport. Students will need to present their ID card to avail this facility. Depending on the
                            distance they pay a small amount for transportation facilities. On a monthly basis DIU approves some subsidies considering the benefits to the students / faculty and the people in the administration. It saves time and money.
                            This service is very helpful for our female students. These can easily avoid unavoidable situations or any kind of unpleasant situation.
                        </p>
                        <p>&nbsp;</p>
                        <p> Also location Track and online tickets have been arranged for transportation facilities. From where the website and software have been used considering the benefits of DIU students / faculty and administration people.</p>


                        <div class="ins">
                            <p>&nbsp;</p>
                            <h3>Facilities Inside The Buses:</h3>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Bus Location Track</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;CCTV Camera</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Online Ticket</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Schedule</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Fire Extinguishers</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;First Aid Box</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Air conditionar</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Excellent seats and safety belt</p>

                        </div>

                        <div class="inx">
                            <p>&nbsp;</p>
                            <h2>Benefits of using University Buses/transport</h2>

                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Always on time</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Safe and time consuming</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Better Environment</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Reduce traffic</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Reduce pollution</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;It can teach time management</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Money saver</p>


                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- .entry-content -->
        </article>
        <!-- #post-## -->

        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    </div>
    <!-- .tg-container -->
    </div>
    <!-- #content -->
    <br><br>

@endsection


@section('script')
    <script src="{{asset('assets/frontend/js/window.js')}}"></script>
@endsection



