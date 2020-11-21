{{--
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
            <div class="adds-block" style="background-image:url('{{asset("assets/frontend/images/noid.jpg")}}');">
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
                              @foreach($popular_posts as $post)
                                <article class="widget-post">
                                    <figure class="post-thumb"><a href="{{route('post.details', $post->id)}}"><img src="{{asset($post->image)}}" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                    <div class="text"><a href="{{route('post.details', $post->id)}}">{{$post->title}}</a></div>
                                    <div class="post-info">{{date('M d, Y', strtotime($post->published_at))}}</div>
                                </article>
                              @endforeach
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
                        <a href="https://www.facebook.com/diutransport" target="_blank"><img src="{{asset('assets/frontend/images/buspage.jpg')}}" /></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</aside>
--}}


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
            <div class="adds-block" style="background-image:url('{{asset("assets/frontend/images/noid.jpg")}}');">
                <div class="inner-box">
                    <b style="color: white;">No ID No Service</b>
                </div>

            </div> <br>
            <p style="font-size: 14px;"> Assist the driver and helper by showing the Daffodil Internatinal University ID card. Be cooperative with drivers, helpers and other passengers.</p>
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

        <!-- Mostrecent head -->

        <div class="mostrecent">

            <!-- Sidebar Block Head Start -->
            <div class="head education-head">

                <!-- Tab List -->
                <div class="sidebar-tab-list education-sidebar-tab-list nav">
                    <a class="active" data-toggle="tab" href="#latest-news" style="list-style: none;">Latest News</a>
                    <a data-toggle="tab" href="#popular-news">Popular News</a>
                </div>

            </div>
            <!-- Sidebar Block Head End -->

            <!-- Sidebar Block Body Start -->
            <div class="body">

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="latest-news">

                        <!-- Small Post Start -->
                      @foreach($latest_news as $post)
                        <div class="post post-small post-list education-post post-separator-border">
                            <div class="postwrap">
                                    <!-- Image -->
                                    <a class="image" href="{{route('post.details', $post->id)}}"><img src="{{asset($post->image)}}" alt="post"></a>
                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h5>
                                            <a href="{{route('post.details', $post->id)}}">{{$post->title}}</a>
                                        </h5>

                                        <!-- Meta -->
                                        <div class="meta fix"><span class="meta-item date"><i class="fa fa-clock-o"></i>{{date('M d, Y', strtotime($post->published_at))}}</span></div>
                                    </div>

                            </div>
                        </div>
                    @endforeach
                        <!-- Small Post End -->

                    </div>
                    <div class="tab-pane fade" id="popular-news">

                        <!-- Small Post Start -->
                     @foreach($popular_posts as $post)
                            <div class="post post-small post-list education-post post-separator-border">
                                <div class="postwrap">
                                    <!-- Image -->
                                    <a class="image" href="{{route('post.details', $post->id)}}"><img src="{{asset($post->image)}}" alt="post"></a>
                                    <!-- Content -->
                                    <div class="content">
                                        <!-- Title -->
                                        <h5>
                                            <a href="{{route('post.details', $post->id)}}">{{$post->title}}</a>
                                        </h5>
                                        <!-- Meta -->
                                        <div class="meta fix"><span class="meta-item date"><i class="fa fa-clock-o"></i>{{date('M d, Y', strtotime($post->published_at))}}</span></div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                        <!-- Small Post End -->

                    </div>
                </div>

            </div>
            <!-- Sidebar Block Body End -->

        </div>

        <!-- Sidebar End -->
    </div>&nbsp;
    <!--Social Widget-->
    <!--Facebook Widget-->
    <div class="sidebar-widget facebook-widget">
        <div class="sec-title">
            <h2>Facebook Page</h2>
        </div>
        <div class="widget-content">
            <div class="image">
                <a href="https://www.facebook.com/diutransport" target="_blank"><img src="{{asset('assets/frontend/images/buspage.jpg')}}" /></a>
            </div>
        </div>
    </div>
    <!--End Social Widget-->
</aside>
