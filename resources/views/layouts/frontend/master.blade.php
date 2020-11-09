<!DOCTYPE html>
<html>
<head>
@include('layouts.frontend._head')
</head>
<body class="home page-template-default page page-id-122228 ">

<div class="mobile-fixed-toolbar">
    <ul class="top-nav-mobile-left">
        <li style="width:36%;"><a href="https://daffodilvarsity.edu.bds"target="_blank"><img style="width:120px;" src="{{asset('assets/frontend/images/logo.png')}}" ></a></li>
    </ul>
    <ul class="top-nav-mobile">
        <li><a href="#" id="pull" class="toggle-mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
    </ul>
</div>

<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
    @include('layouts.frontend._topNav')
</nav>


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
                   @yield('content')
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



<footer id="colophon" class="site-footer" style="background-color: black;" role="contentinfo" >
    @include('layouts.frontend._footer')
</footer>

<!-- Go Top BTN -->
<button class="goTop fas fa-arrow-up"></button>

@include('layouts.frontend._script')


</body>

</html>





