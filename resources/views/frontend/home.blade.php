<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DIU TRANSPORT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">


    <link href="{{asset('assets/frontend/style/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/style/bus.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/style/buyticket.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/style/contact.css')}}" rel="stylesheet">

    <link id="theme-color-file" href="{{asset('assets/frontend/style/footer.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/style/main.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/style/nav.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/style/responsive.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/style/user.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/style/gallery.css')}}" rel="stylesheet">
    <style>
        .dropbtn {
            padding: 16px;
            font-size: 14px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;width: 100%;}

        .dropdown:hover .dropdown-content {display: block;}

    </style>
</head>
<body class="home page-template-default page page-id-122228 ">

<div class="mobile-fixed-toolbar">
    <ul class="top-nav-mobile-left">
        <li style="width:36%;"><a href="https://daffodilvarsity.edu.bds"target="_blank"><img style="width:120px;" src="images/logo.png" ></a></li>
    </ul>
    <ul class="top-nav-mobile">
        <li><a href="#" id="pull" class="toggle-mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
    </ul>
</div>

<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
    <div id="nav-container">
        <ul id="menu-header-menu" class="menu clearfix">
            <li><a href="home.html" >Home</a></li>
            <li><a href="schedule.html">Schedule</a></li>
            <li><a href="service.html">Service</a></li>
            <li><a href="buyticket.html">Buy Ticket</a></li>
            <li><div class="dropdown">
                    <a class="dropbtn" style="color: white;">Facilities</a>
                    <div class="dropdown-content">
                        <a href="maps.html">Locate Bus</a>
                        <a href="#">Facial Recognition</a>
                    </div>
                </div></li>
            <li><div class="dropdown">
                    <a class="dropbtn" style="color: white;">Info</a>
                    <div class="dropdown-content">
                        <a href="about.html">About</a>
                        <a href="trnasportinfo.html">Transport Info</a>
                        <a href="developers.html">Developers</a>
                    </div>
                </div>
            </li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a>	</li>
            <li><a href="user.html">Account</a></li>
        </ul>


        <div id="header-user-info-container" class="hidden-to-guest">
          <span id="robi-header-logo">
            <a href="#"> <img src="{{asset('assets/frontend/images/logo.png')}}" ></a>
          </span>
        </div>

    </div>
</nav>    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


<script src="{{asset('assets/frontend/js/main-slider-script.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/appear.js')}}"></script>
<script src="{{asset('assets/frontend/js/wow.js')}}"></script>
<script src="{{asset('assets/frontend/js/script.js')}}"></script>
<script src="{{asset('assets/frontend/js/color-settings.js')}}"></script>
<script src="{{asset('assets/frontend/js/scripts.js')}}"></script>
<script src="{{asset('assets/frontend/js/goto-btn.js')}}"></script>
<script src="{{asset('assets/frontend/js/gallery.js')}}"></script>


<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navigation").style.background = "rgb(13, 165, 216)";
        } else {
            document.getElementById("navigation").style.background = "transparent";
        }
    }

    /*----------------------------------------------------
    /* Responsive Navigation
    /*--------------------------------------------------*/
    jQuery(document).ready(function($){
        $('.primary-navigation').not('.mobile-menu-wrapper').find('.menu').clone().appendTo('.mobile-menu-wrapper').hide();

        $('.toggle-mobile-menu').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('body').toggleClass('mobile-menu-active');
        });

        // prevent propagation of scroll event to parent
        $(document).on('DOMMouseScroll mousewheel', '.mobile-menu-wrapper', function(ev) {
            var $this = $(this),
                scrollTop = this.scrollTop,
                scrollHeight = this.scrollHeight,
                height = $this.height(),
                delta = (ev.type == 'DOMMouseScroll' ?
                    ev.originalEvent.detail * -40 :
                    ev.originalEvent.wheelDelta),
                up = delta > 0;

            var prevent = function() {
                ev.stopPropagation();
                ev.preventDefault();
                ev.returnValue = false;
                return false;
            }

            if ( $('a#pull').css('display') !== 'none' ) { // if toggle menu button is visible ( small screens )

                if (!up && -delta > scrollHeight - height - scrollTop) {
                    // Scrolling down, but this will take us past the bottom.
                    $this.scrollTop(scrollHeight);
                    return prevent();
                } else if (up && delta > scrollTop) {
                    // Scrolling up, but this will take us past the top.
                    $this.scrollTop(0);
                    return prevent();
                }
            }
        });
    }).on('click', function(event) {

        var $target = jQuery(event.target);
        if ( ( $target.hasClass("fa") && $target.parent().hasClass("toggle-caret") ) ||  $target.hasClass("toggle-caret") ) {// allow clicking on menu toggles
            return;
        }

        jQuery('').removeClass('mobile-menu-active');
    });




</script>



<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/frontend/images/diu.jpg')}}" alt="Los Angeles" style="width: 100%; height:450px">
            <div class="carousel-caption">
                <h3 style="text-shadow: 6px solid red">Daffodil Internatinal University</h3>
                <p>A New Journey in Campus Automate Transportation System</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/frontend/images/bus13.jpg')}}" alt="Los Angeles" style="width: 100%; height:450px">
            <div class="carousel-caption">
                <h3 style="text-shadow: 6px solid red">Daffodil Internatinal University</h3>
                <p>A New Journey in Campus Automate Transportation System</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/frontend/images/bus1.jpg')}}" alt="Chicago" style="width: 100%; height:400px">
            <div class="carousel-caption">
                <h3>DIU</h3>
                <p>Thank you, Daffodil!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/frontend/images/bus4.jpg')}}" alt="New York" style="width: 100%; height:400px">
            <div class="carousel-caption">
                <h3>DIU</h3>
                <p>We love the Big Apple!</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
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
                                                <div class="image">
                                                    <img src="{{asset('assets/frontend/images/bus5.jpg')}}"/>
                                                    <div class="category"><a href="#">Video</a></div>
                                                    <a href="https://www.youtube.com/watch?v=sL0oTexGTc4" target="_blank" class="lightbox-image overlay-box">
                                                            <span class="fa fa-play-circle"><i class="ripple">
                                                            </i></span></a>
                                                </div>

                                                <div class="lower-box">
                                                    <h3>
                                                        Bustand
                                                    </h3>
                                                    <ul class="post-meta">
                                                        <li><span class="icon fa fa-clock-o"></span>February 16, 2020</li>
                                                        <li><span class="icon fa fa-comment-o"></span>3</li>
                                                        <li><span class="icon fa fa-eye"></span>1524</li>
                                                    </ul>
                                                    <div class="text">There is a huge transport pool on the permanent campus for students to travel. There is a bus stand next to the main campus to keep the buses safe.</div>

                                                </div>
                                            </div>
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

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="#"><img src="{{asset('assets/frontend/images/bonomaya.jpg')}}" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="#">Bonomaya at Daffodil International University</a></div>
                                                    <div class="post-info">March 01, 2020</div>
                                                </article>

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="#"><img src="{{asset('assets/frontend/images/know.jpg')}}" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
                                                    <div class="text"><a href="#">Knowledge Valley at Daffodil International University<</a></div>
                                                    <div class="post-info">January 03, 2020</div>
                                                </article>

                                                <article class="widget-post">
                                                    <figure class="post-thumb"><a href="#"><img src="{{asset('assets/frontend/images/ino.jpg')}}" alt=""></a><div class="overlay"><span class="icon qb-play-arrow"></span></div></figure>
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
                                        <a href="https://www.facebook.com/diutransport" target="_blank"><img src="{{asset('assets/frontend/images/buspage.jpg')}}" /></a>
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



<footer id="colophon" class="site-footer" style="background-color: black;" role="contentinfo" >
    <div id="footer-sidebar" class="secondary">
        <div id="footer-sidebar1" style="width:32%;margin-right:8%;">
            <img style="max-width: 140px;display: block;margin-bottom: 12px;margin-left: -6px;" src="{{asset('assets/frontend/images/logo.png')}}">
            <div class="onlypc">
                <p>About</p>
                <p style="font-size: 1em;color: #fff;line-height: 1.5em;">
                    Daffodil International University (DIU) is a recognized private university in ... DIU Transport Schedule ... Dhamrai bus station, Via Nabinagar, CMB, 7.45 am.
                </p>
            </div>
        </div>

        <div id="footer-sidebar1">
            <aside id="nav_menu-6" class="widget widget_nav_menu"><h3 class="widget-title">SECURITY AND BRAND</h3>
                <div class="menu-sections-footer-menu-container">
                    <ul id="menu-sections-footer-menu" class="menu">
                        <li id="menu-item-119979" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119979"><a href="https://daffodilvarsity.edu.bd/transport#"target="_blank">Privacy Statement</a></li>
                        <li id="menu-item-119981" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119981"><a href="https://daffodilvarsity.edu.bd/article/copyright-issue"target="_blank">Report Copyright Infringement</a></li>
                        <li id="menu-item-122251" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-122251"><a href="https://daffodilvarsity.edu.bd/article/security-issues"target="_blank">Report on Security Issues</a></li>
                        <li id="menu-item-122251" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-122251"><a href="http://bd.daffodil.family/"target="_blank">DIU Branding</a></li>
                    </ul>
                </div>
            </aside>
        </div>


        <div id="footer-sidebar2">
            <aside id="nav_menu-4" class="widget widget_nav_menu"><h3 class="widget-title">USEFUL LINKS</h3>
                <div class="menu-footer-container">
                    <ul id="menu-footer" class="menu">
                        <li id="menu-item-29239" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29239"><a href="http://blog.daffodilvarsity.edu.bd/"target="_blank">Blog</a></li>
                        <li id="menu-item-29233" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29233"><a href="http://news.daffodilvarsity.edu.bd/"target="_blank">DIU News</a></li>
                        <li id="menu-item-113695" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113695"><a href="http://diupress.com/"target="_blank">DIU Press</a></li>
                        <li id="menu-item-121952" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-121952"><a href="http://newsletter-archive.daffodilvarsity.edu.bd/"target="_blank">Media Coverage</a></li>
                        <li id="menu-item-111890" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111890"><a href="http://it.daffodilvarsity.edu.bd/"target="_blank">DIU IT</a></li>
                        <li id="menu-item-121952" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-121952"><a href="http://etender.daffodilvarsity.edu.bd/"target="_blank">eTender</a></li>
                        <li id="menu-item-111890" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111890"><a href="http://skill.jobs/"target="_blank">skill.jobs</a></li>
                    </ul>
                </div>
            </aside>
        </div>

        <div id="footer-sidebar3">
            <aside id="nav_menu-5" class="widget widget_nav_menu"><h3 class="widget-title">DOWNLOADS</h3>
                <div class="menu-social-follow-footer-menu-container">
                    <ul id="menu-social-follow-footer-menu" class="menu"><li id="menu-item-119974" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119974"><a href="http://newsletter.daffodilvarsity.edu.bd/"target="_blank">Newsletters</a></li>
                        <li id="menu-item-119975" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119975"><a href="https://daffodilvarsity.edu.bd/images/download/DIU.wma">DIU Theme Song</a></li>
                        <li id="menu-item-119976" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119976"><a href="https://daffodilvarsity.edu.bd/article/brochure"target="_blank">Brochure</a></li>
                        <li id="menu-item-119977" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119977"><a href="https://daffodilvarsity.edu.bd/article/prospectus"target="_blank">Prospectus</a></li>
                        <li id="menu-item-119978" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119978"><a href="https://daffodilvarsity.edu.bd/article/forms"target="_blank">Forms</a></li>
                        <li id="menu-item-119977" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119977"><a href="https://daffodilvarsity.edu.bd/article/downloads"target="_blank">Brand Documents</a></li>
                        <li id="menu-item-119978" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119978"><a href="https://daffodilvarsity.edu.bd/article/apps"target="_blank">Apps</a></li>
                    </ul>
                </div>
                <aside>
        </div>
    </div>
    <div id="copyright"><p>Copyright © 2020 DIU. All rights reserved</p></div>
    <style>
        div#copyright{
            display: inline-block;
            width: 100%;
            text-align: center;
            font-size: 12px;
            padding: 10px 4px 0 4px;
            background: #111;
            color: #fff;
        }
    </style>
</footer>

<!-- Go Top BTN -->
<button class="goTop fas fa-arrow-up"></button>

</<body>

</<html>




