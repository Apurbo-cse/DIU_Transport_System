@extends('layouts.frontend.master')
@section('title', 'Blog')
@section('content')
<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)">
</div>
<br><br>

<div class="auto-container">
    <div class="row clearfix">

        <!--Content Side-->
        <div class="content-side col-lg-8 col-md-12 col-sm-12">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>Latest News</h2>
            </div>
            <div class="content-blocks">

                <!--News Block Four-->
                <div class="news-block-four">
                    <div class="inner-box">
                        <div class="row clearfix">
                          @foreach($posts as $post)
                            <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                <div class="image">
                                    <a href="{{route('post.details', $post->id)}}"><img src="{{$post->image}}" alt="" /></a>
                                </div>
                            </div>
                            <div class="content-box col-lg-6 col-md-6 col-sm-12">
                                <div class="content-inner">
                                    <h3><a href="{{route('post.details', $post->id)}}">{{$post->title}}</a></h3>
                                    <ul class="post-meta">
                                        <li><span class="icon fa fa-clock-o"></span>{{$post->published_at->format('M d, Y')}}</li>
                                        <li><span class="icon fa fa-comments"></span>9</li>
                                        <li><span class="icon fa fa-eye"></span>{{$post->view_count }}</li>
                                    </ul>
                                    <div class="text">{{Str::limit($post->description, 170)}}</div>
                                    <a href="{{route('post.details', $post->id)}}" class="read-more">Read More </a>
                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
                <!-- END News Block Four-->

                {{--<!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                                <span class="page-link">
                                  1
                                  <span class="sr-only">(current)</span>
                                </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!-- Pagination End -->--}}
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <nav aria-label="Page navigation" class="text-center">
                            <ul class="pagination">
                                {{$posts->render()}}
                            </ul>
                        </nav>
                    </div>
                </div>
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
                            <li><a href="https://www.facebook.com/daffodilvarsity.edu.bd"><span></span><i
                                        class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="http://localhost/automated%20transport/home.html"><span></span><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="g_plus"><a href="https://www.instagram.com/daffodil.university/"><span></span> <i
                                        class="fab fa-instagram"></i></a></li>
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
{{--
                                            <article class="widget-post">
                                                <figure class="post-thumb">
                                                    <a href="#"><img src="images/bonomaya.jpg" alt=""></a>
                                                    <div class="overlay"><span class="icon qb-play-arrow"></span>
                                                    </div>
                                                </figure>
                                                <div class="text"><a href="#">Bonomaya at Daffodil International
                                                        University</a></div>
                                                <div class="post-info">March 01, 2020</div>
                                            </article>

                                            <article class="widget-post">
                                                <figure class="post-thumb">
                                                    <a href="#"><img src="images/know.jpg" alt=""></a>
                                                    <div class="overlay"><span class="icon qb-play-arrow"></span>
                                                    </div>
                                                </figure>
                                                <div class="text"><a href="#">Knowledge Valley at Daffodil
                                                        International University<</a> </div>
                                                <div class="post-info">
                                                    January 03, 2020</div>
                                            </article>--}}
                                           @foreach($popular_posts as $post)
                                            <article class="widget-post">
                                                <figure class="post-thumb">
                                                    <a href="#"><img src="{{$post->image}}" alt=""></a>
                                                    <div class="overlay"><span class="icon qb-play-arrow"></span>
                                                    </div>
                                                </figure>
                                                <div class="text"><a href="#">{{$post->title}}</a></div>
                                                <div class="post-info icon fa fa-clock-o">{{$post->published_at->format('M d, Y')}}</div>
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
