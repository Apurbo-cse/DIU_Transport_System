@extends('layouts.frontend.master')
@section('title', 'Home')
@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel">
        @include('layouts.frontend._slider')
    </div>


        <div class="sidebar-page-container" style="margin:-70px 0px -70px ">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <!--Category Tabs Box-->
                    <div class="category-tabs-box">
                        <!--Product Tabs-->
                    <div class="prod-tabs tabs-box">


            <!--Tabs Container-->
            <div class="tabs-content">

                <!--Tab / Active Tab-->
                <div class="tab active-tab" id="prod-alls">
                    <div class="content">

                        <div class="row clearfix">


                            <!-- News Block Two -->
                            <div class="news-block-two col-sm-12">

                                <!--Sec Title-->
                                <div class="sec-title">
                                    <h2>Latest News</h2>
                                </div>

                                <div class="inner-box">
                                    @foreach($videos as $video)
                                    <div class="image">
                                        <img src="{{asset($video->image)}}"/>
                                        <div class="category"><a href="#">Video</a></div>
                                        <a href="{{$video->link}}" target="_blank" class="lightbox-image overlay-box">
                                            <span class="fa fa-play-circle"><i class="ripple"></i></span></a>
                                    </div>

                                    <div class="lower-box">
                                        <h3>
                                            {{$video->title}}
                                        </h3>
                                        <ul class="post-meta">
                                            <li><span class="icon fa fa-clock-o"></span>{{$video->published_at->format('M d, Y')}}</li>
                                            <li><span class="icon fa fa-comments"></span>3</li>
                                            <li><span class="icon fa fa-eye"></span>{{$video->view_count }}</li>
                                        </ul>
                                        <div class="text">{{$video->description}}</div>

                                    </div>
                                </div>
                                @endforeach
                            </div>



                            <!-- News Block Two -->
                            <div class="news-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">

                                    <div class="single-item-carousel owl-carousel owl-theme">
                                        <div class="image">
                                            <img src="{{asset('assets/frontend/images/noid1.jpg')}}" alt="" />
                                            <div class="category"><a href="#">Show ID</a></div>
                                        </div>

                                    </div>

                                    <div class="lower-box">
                                        <h3>
                                            NO ID NO Service
                                        </h3>
                                        <ul class="post-meta">
                                            <li><span class="icon fa fa-clock-o"></span>February 16, 2020</li>
                                            <li><span class="icon fa fa-comment-o"></span>3</li>
                                            <li><span class="icon fa fa-eye"></span>1524</li>
                                        </ul>
                                        <div class="text">
                                            The ID card you have been issued represents your identity. Wearing ID card at all times helps the security personnel and others to ....
                                        </div>
                                        <a href="bloghome.html" class="read-more">Read More </a>
                                    </div>

                                </div>
                            </div>

                            <!-- News Block Two -->
                            <div class="news-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="single-item-carousel owl-carousel owl-theme">
                                        <div class="image">
                                            <img src="{{asset('assets/frontend/images/bus10.jpg')}}" alt="" />
                                            <div class="category"><a href="#">ICONCS</a></div>
                                        </div>
                                    </div>

                                    <div class="lower-box">
                                        <h3>
                                            Daffodil
                                        </h3>
                                        <ul class="post-meta">
                                            <li><span class="icon fa fa-clock-o"></span>February 16, 2020</li>
                                            <li><span class="icon fa fa-comment-o"></span>3</li>
                                            <li><span class="icon fa fa-eye"></span>1524</li>
                                        </ul>
                                        <div class="text"> There is a huge transport pool on the permanent campus for students to travel. There is a bus stand next to the city campus to keep the buses safe.</div>
                                        <a href="#" class="read-more">Read More </a>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>



                <!--Tab-->
                <div class="tab" id="prod-fashion">
                    <div class="content">
                        <div class="row clearfix">

                            <!-- News Block Two -->
                            <div class="news-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="single-item-carousel owl-carousel owl-theme">
                                        <div class="image">
                                            <img src="{{asset('assets/frontend/images/news-36.jpg')}}" alt="" />
                                            <div class="category"><a href="#">Travel</a></div>
                                        </div>
                                        <div class="image">
                                            <a href="#"><img src="{{asset('assets/frontend/images/news-34.jpg')}}" alt="" /></a>
                                            <div class="category"><a href="#">Travel</a></div>
                                        </div>
                                        <div class="image">
                                            <a href="#"><img src="{{asset('assets/frontend/imagesnews-35.jpg')}}" alt="" /></a>
                                            <div class="category"><a href="#">Travel</a></div>
                                        </div>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">How Chrismic American people celebrates in his county with friends</a></h3>
                                        <ul class="post-meta">
                                            <li><span class="icon fa fa-clock-o"></span>March 16, 2017</li>
                                            <li><span class="icon fa fa-comment-o"></span>3</li>
                                            <li><span class="icon fa fa-eye"></span>1524</li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus…</div>
                                        <a href="#" class="read-more">Read More </a>
                                    </div>
                                </div>
                            </div>


                            <!-- News Block Two -->
                            <div class="news-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="single-item-carousel owl-carousel owl-theme">
                                        <div class="image">
                                            <img src="{{asset('assets/frontend/images/resource/news-37.jpg')}}" alt="" />
                                            <div class="category"><a href="#">Fashion</a></div>
                                        </div>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">How Chrismic American people celebrates in his county with friends</a></h3>
                                        <ul class="post-meta">
                                            <li><span class="icon fa fa-clock-o"></span>March 16, 2017</li>
                                            <li><span class="icon fa fa-comment-o"></span>3</li>
                                            <li><span class="icon fa fa-eye"></span>1524</li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus…</div>
                                        <a href="#" class="read-more">Read More </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--Tab-->
                <div class="tab" id="prod-money">
                    <div class="content">
                        <div class="row clearfix">

                            <!-- News Block Two -->
                            <div class="news-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="single-item-carousel owl-carousel owl-theme">
                                        <div class="image">
                                            <img src="{{asset('assets/frontend/images/fasion.jpg')}}" alt="" />
                                            <div class="category"><a href="#">Travel</a></div>
                                        </div>
                                        <div class="image">
                                            <a href="#"><img src="{{asset('assets/frontend/images/news-34.jpg')}}" alt="" /></a>
                                            <div class="category"><a href="#">Travel</a></div>
                                        </div>
                                        <div class="image">
                                            <a href="#"><img src="{{asset('assets/frontend/images/back.jpg')}}" alt="" /></a>
                                            <div class="category"><a href="#">Travel</a></div>
                                        </div>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">How Chrismic American people celebrates in his county with friends</a></h3>
                                        <ul class="post-meta">
                                            <li><span class="icon fa fa-clock-o"></span>March 16, 2017</li>
                                            <li><span class="icon fa fa-comment-o"></span>3</li>
                                            <li><span class="icon fa fa-eye"></span>1524</li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus…</div>
                                        <a href="#" class="read-more">Read More </a>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block Two -->
                            <div class="news-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('assets/frontend/images/footer.jpg')}}" alt="" />
                                        <div class="category"><a href="#">sports</a></div>
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="fa fa-play-circle"><i class="ripple"></i></span></a>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">Available Across All Countries Over The World</a></h3>
                                        <ul class="post-meta">
                                            <li><span class="icon fa fa-clock-o"></span>March 16, 2017</li>
                                            <li><span class="icon fa fa-comment-o"></span>3</li>
                                            <li><span class="icon fa fa-eye"></span>1524</li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus…</div>
                                        <a href="#" class="read-more">Read More </a>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block Two -->
                            <div class="news-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <blockquote>
                                        <div class="blockquote-inner">
                                            <div class="quote-icon">
                                                <span class="icon fa fa-quote-left"></span>
                                            </div>
                                            <div class="quote-text">“Last year, the market witnessed a real fever" of land, pushing up the land price level to a very high level”</div>
                                            <div class="quote-author">–George Nelson</div>
                                        </div>
                                    </blockquote>
                                    <div class="lower-box">
                                        <h3><a href="#">How Chrismic American people celebrates in his county with friends</a></h3>
                                        <ul class="post-meta">
                                            <li><span class="icon fa fa-clock-o"></span>March 16, 2017</li>
                                            <li><span class="icon fa fa-comment-o"></span>3</li>
                                            <li><span class="icon fa fa-eye"></span>1524</li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus…</div>
                                        <a href="#" class="read-more">Read More </a>
                                    </div>
                                </div>
                            </div>

                            <!-- News Block Two -->
                            <div class="news-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="single-item-carousel owl-carousel owl-theme">
                                        <div class="image">
                                            <img src="{{asset('assets/frontend/images/back.jpg')}}" alt="" />
                                            <div class="category"><a href="#">Fashion</a></div>
                                        </div>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">How Chrismic American people celebrates dgfdg dgfef wewexrewwe in his county with friends</a></h3>
                                        <ul class="post-meta">
                                            <li><span class="icon fa fa-clock-o"></span>March 16, 2017</li>
                                            <li><span class="icon fa fa-comment-o"></span>3</li>
                                            <li><span class="icon fa fa-eye"></span>1524</li>
                                        </ul>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti, nascetur ridiculus mus…</div>
                                        <a href="#" class="read-more">Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block Four-->
                <!--News Block Four-->
                <div class="news-block-four">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                <div class="image">
                                    <a href="#"><img src="{{asset('assets/frontend/images/bono.jpg')}}" alt="" /></a>
                                </div>
                            </div>
                            <div class="content-box col-lg-6 col-md-6 col-sm-12">
                                <div class="content-inner">
                                    <div class="category"><a href="#">Bonomaya</a></div>
                                    <h3><a href="#">Bonomaya is located at Daffodil International University</a></h3>
                                    <ul class="post-meta">
                                        <li><span class="icon fa fa-clock-o"></span>March 04, 2017</li>
                                        <li><span class="icon fa fa-comment-o"></span>7</li>
                                        <li><span class="icon fa fa-eye"></span>20</li>
                                    </ul>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti…</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END News Block Four-->

                <!--News Block Four-->
                <div class="news-block-four">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                <div class="image">
                                    <a href="#"><img src="{{asset('assets/frontend/images/ino.jpg')}}" alt="" /></a>
                                </div>
                            </div>
                            <div class="content-box col-lg-6 col-md-6 col-sm-12">
                                <div class="content-inner">
                                    <div class="category"><a href="#">INOVATION LAB</a></div>
                                    <h3><a href="#">Our dreams just got one step closer to universal reality</a></h3>
                                    <ul class="post-meta">
                                        <li><span class="icon fa fa-clock-o"></span>March 04, 2017</li>
                                        <li><span class="icon fa fa-comment-o"></span>7</li>
                                        <li><span class="icon fa fa-eye"></span>20</li>
                                    </ul>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli. Aenean commodo ligula eget dolor. Aenean massa. Cumtipsu sociis natoque penatibus et magnis dis parturient montesti…</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END News Block Four-->

            </div>
        </div>
                    </div>
                </div>

                <!--Sidebar-->
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    @include('layouts.frontend._sidebar')
                </div>
            </div>
        </div>

    </div>
@endsection
