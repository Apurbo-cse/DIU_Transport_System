@extends('layouts.frontend.master')
@section('title', 'User Profile')
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

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <article id="post-228" class="post-228 page type-page status-publish hentry">

                        <div class="eabzn">
                            <div class="eabd">

                                <div class="row" style="margin-left: 30px; margin-right: 30px;">
                                    <p>&nbsp;</p>
                                    <h3>Introduction :</h3>
                                    <p style="text-align: justify;">
                                    <p>DIU transtpost is apparently private specializing in transportation of students and faculty bus services since 2013. We worked hard and honest, we put our vision forward and explored ways and means to continuously
                                        improve students and faculty comfort, and as a result, we were able to introduce the 1st ever online bus services in Private University. The company at present operates more then 50 (Fivety) buses on schedule
                                        routes employing over 100 trained staff and safely transporting over a passengers a year.</p>
                                    </p>

                                    <div class="ins">
                                        <p>&nbsp;</p>
                                        <b style="color: rgb(109, 109, 109);">The mission of the Transport Company may be categorized by 3 principal activities as follows :
                                        </b>
                                        <p>&nbsp;</p>

                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;The goal priorities for efficient service through continuous development towards world class standards are safety,&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;convenience, cleanliness, modernity and punctuality in every journey.</p>
                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Create student and faculty satisfaction and meet student and faculty needs. The service network must be connected and &nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allowed uninterrupted.
                                        </p>
                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Implement a system of management that is both efficient and streamlined. Capitalise on the potential of employees, by &nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;building teamwork. Reduce waste and non-productivity, in the interest of quality management and to compete with the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;private
                                            sector.
                                        </p>

                                    </div>

                                    <div class="inx">
                                        <p>&nbsp;</p>
                                        <h3>Our Vision :</h3>

                                        <p>Must be a domestic land transport worker by employing world class service quality, efficient management, modern technology and quality workers.</p>

                                    </div>.
                                    <div class="inx">
                                        <p>&nbsp;</p>
                                        <h3>Our Management :</h3>

                                        <p>DIU Authority</p>

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


