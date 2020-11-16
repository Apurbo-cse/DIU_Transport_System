@extends('layouts.frontend.master')
@section('title', $post->title)
@section('content')
    <div style="width: 100%;height:50px ; background: rgb(6, 100, 121)">
    </div>
    <br><br>

    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="content-blocks">

                    <!--News Block Four-->
                    <div class="news-block-four">
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="image-column col-sm-12">
                                    <div class="image">
                                        <img src="{{asset($post->image)}}" alt="" width="100%"/>
                                    </div>
                                </div>
                                <div class="content-box  col-sm-12">
                                    <div class="content-inner">
                                        <h3>{{$post->title}}</h3>
                                        <ul class="post-meta">
                                            <li><span class="icon fa fa-clock-o"></span>{{date('M d, Y', strtotime($post->published_at))}}</li>
                                            <li><span class="icon fa fa-comments"></span>9</li>
                                            <li><span class="icon fa fa-eye"></span>{{$post->view_count}}</li>
                                        </ul>
                                        <div class="text-justify">
                                            <p>
                                                {{$post->description}}
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END News Block Four-->
                    <!-- Contact -->
                    <section id="contact">
                        <p>Comment</p>
                        <div class="user-comment" style="padding: 10px; border-bottom: 1px solid  rgba(88, 88, 88, 0.123); ">
                            <table style="font-size: 12px;">
                                <tr>
                                    <td>
                                        <b>Apurbo Kumar </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style=" font-size: 12px; ">&nbsp;&nbsp;<i class="fa fa-comments " aria-hidden="true " style="font-size: 10px; "></i> &nbsp;&nbsp; Lorem ipsum dolor sit amet, consectetuer adipiscing elit doli.</li>
                                    </td>
                                    <td style="font-size: 10px; ">
                                        &nbsp;&nbsp; &nbsp;&nbsp;
                                        <li class=" fa fa-clock-o " aria-hidden="true "> </li>&nbsp; 3rd March, 2020
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table>
                                <tr>
                                    <td style="font-size: 12px; ">
                                        <b>Akash Sarkar </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 12px; ">&nbsp;&nbsp;<i class="fa fa-comments " aria-hidden="true " style="font-size: 10px; "></i> &nbsp;&nbsp; Cumtipsu sociis natoque penatibus et magnis dis parturient montesti .</li>
                                    </td>
                                    <td style="font-size: 10px; ">
                                        &nbsp;&nbsp; &nbsp;&nbsp;
                                        <li class=" fa fa-clock-o " aria-hidden="true "></li> &nbsp; 17th November, 2020
                                    </td>
                                </tr>
                            </table>
                            <br>
                        </div>
                        <br>


                        <div class="inner-width ">
                            <form class="contact-form ">
                                <input type="text " class="nameZone " placeholder="Name " required>
                                <input type="email " class="emailZone " placeholder="Email " required>
                                <textarea class="messageZone " placeholder="Message " required></textarea>
                                <input type="submit " value="Send Message " class="btn ">
                            </form>
                        </div>
                    </section>

                    <br><br>

                </div>
            </div>
            <!--Sidebar Side-->
            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar default-sidebar">
                    <div class="sidebar-inner">

                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!--Adds Widget-->
                        <div class="sidebar-widget sidebar-adds-widget">
                            <div class="adds-block" style="background-image:url(images/noid.jpg);">
                                <div class="inner-box">
                                    <b style="color: white;">No ID No Service</b>
                                </div>

                            </div> <br>
                            <p> Assist the driver and helper by showing the Daffodil Internatinal University ID card. Be cooperative with drivers, helpers and other passengers.</p>
                        </div>
                        <!--Ends Adds Widget-->

                        <!--Social Widget-->
                        <div class="sidebar-widget sidebar-social-widget">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <h2>Follow Us</h2>
                            </div>
                            <ul class="social-icon-one alternate">
                                <li><a href="https://www.facebook.com/daffodilvarsity.edu.bd"><span></span><i class="fab fa-facebook"></i></a></li>
                                <li class="twitter"><a href="http://localhost/automated%20transport/home.html"><span></span><i class="fab fa-twitter"></i></a></li>
                                <li class="g_plus"><a href="https://www.instagram.com/daffodil.university/"><span></span> <i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!--End Social Widget-->


                        <!--News Post Widget-->
                        <div class="sidebar-widget posts-widget">

                            <!--Product widget Tabs-->
                            <div class="product-widget-tabs">
                                <!--Product Tabs-->
                                <div class="prod-tabs tabs-box">

                                    <!--Tab Btns-->
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#prod-popular" class="tab-btn active-btn">Popular</li>
                                        <li data-tab="#prod-recent" class="tab-btn">Recent</li>
                                        <li data-tab="#prod-comment" class="tab-btn">Comments</li>
                                    </ul>

                                    <!--Tabs Container-->
                                    <div class="tabs-content">

                                        <!--Tab / Active Tab-->
                                        <div class="tab active-tab" id="prod-popular">
                                            <div class="content">

                                                <article class="widget-post">
                                                    <figure class="post-thumb">
                                                        <a href="#"><img src="images/bonomaya.jpg" alt=""></a>
                                                        <div class="overlay"><span class="icon qb-play-arrow"></span></div>
                                                    </figure>
                                                    <div class="text"><a href="#">Bonomaya at Daffodil International University</a></div>
                                                    <div class="post-info">March 01, 2020</div>
                                                </article>

                                                <article class="widget-post">
                                                    <figure class="post-thumb">
                                                        <a href="#"><img src="images/know.jpg" alt=""></a>
                                                        <div class="overlay"><span class="icon qb-play-arrow"></span></div>
                                                    </figure>
                                                    <div class="text"><a href="#">Knowledge Valley at Daffodil International University<</a></div>
                                                    <div class="post-info">January 03, 2020</div>
                                                </article>

                                                <article class="widget-post">
                                                    <figure class="post-thumb">
                                                        <a href="#"><img src="images/ino.jpg" alt=""></a>
                                                        <div class="overlay"><span class="icon qb-play-arrow"></span></div>
                                                    </figure>
                                                    <div class="text"><a href="#">The largest inovation lab in Private University of Bangladesh</a></div>
                                                    <div class="post-info">January 03, 2020</div>
                                                </article>

                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div>
                            <br>

                            <!--Facebook Widget-->
                            <div class="sidebar-widget facebook-widget">
                                <div class="sec-title">
                                    <h2>Facebook Page</h2>
                                </div>
                                <div class="widget-content">
                                    <div class="image">
                                        <a href="https://www.facebook.com/diutransport" target="_blank"><img src="images/buspage.jpg" /></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    </div>
@endsection
