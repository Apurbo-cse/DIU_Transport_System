<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>User Profile :: DIU_Transport_System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="shortcut icon" href="{{asset('assets/frontend/icons/fav-icon.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/style/sup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/co-sup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/teams.css')}}">
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
    <link rel="stylesheet" href="{{asset('assets/frontend/style/most_post.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/drop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/about.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/modal.css')}}">
    <link rel="stylesheet" href="style.css">

</head>

<body class="home page-template-default page page-id-122228 ">

<div class="mobile-fixed-toolbar">
    <ul class="top-nav-mobile-left">
        <li style="width:36%;">
            <a href="https://daffodilvarsity.edu.bds" target="_blank"><img style="width:120px;" src="{{asset('assets/frontend/images/logo.png')}}"></a>
        </li>
    </ul>
    <ul class="top-nav-mobile">
        <li><a href="{{route('profile')}}" id="pull" class="toggle-mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
    </ul>
</div>

<nav id="navigation" class="primary-navigation mobile-menu-wrapper" role="navigation">
    @include('layouts.frontend._topNav')
</nav>
<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)"></div>


<body style="background-color:rgb(221, 221, 221);">
<div id="supervisor">
    <div class="supervisor cons">

        <div class="col-left">
            <div class="supervisor-img">
                <img src="{{asset('assets/frontend/images/team/mijanur.jpg')}}" alt="img">
            </div>
        </div>
        <div class="col-right">
            <h1 class="sup-title">Profi<span>le</span></h1>
            <h2>
                Mizanur Rahaman raihan
            </h2>
            <br>
            <div>
                <p class="pro-type">ID : 171-X-14XX</p>
                <p class="pro-type">Department of CSE</p>
                <p class="pro-type">Email : mizahurx-15xx@diu.edu.bd</p>
                <p class="pro-type">Daffodil International University</p>

                <button name="signup-btn" id="cookies" class="btnxa">Edit Profile</button>
            </div>
        </div>
    </div>
</div>
<div class="modalx cookies">
    <form action="">
        <i class="fas fa-times close"></i>
        <img src="{{asset('assets/frontend/icons/profile.jpg')}}" class="img" alt="Cookies">
        <input type="file" name="user-name" class="picz" required>
        <h2 style="font-size:20px ;">Edit Profile</h2>
        <div class="login-input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="image" value="Mizanur Rahaman Raihan" required />
        </div>
        <div class="login-input-field">
            <i class="fas fa-id-card"></i>
            <input type="id" name="user-id" value="171-15-XXXX" required />
        </div>
        <div class="login-input-field">
            <i class="fas fa-graduation-cap"></i>
            <input type="department" name="user-dept" value="CSE" required />
        </div>
        <div class="login-input-field">
            <i class="fas fa-phone"></i>
            <input type="phone" name="user-phonel" value="+8801749XXXX" required />
        </div>
        <div class="login-input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="user-email" value="abc15-101@diu.edu.bd" required />
        </div>
        <div class="login-input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="user-pass" value="Password" required />
        </div>
        <button name="signup-btn" class="btnxa">Confirm</button>


    </form>
</div>
</body>

<br><br>

<footer id="colophon" class="site-footer" style="background-color: black;" role="contentinfo">
    @include('layouts.frontend._footer')
</footer>

<!-- Go Top BTN -->
<button class="goTop fas fa-arrow-up"></button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets/frontend/js/modal.js')}}">
</script>
<script src="{{asset('assets/frontend/js/main-slider-script.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/appear.js')}}"></script>
<script src="{{asset('assets/frontend/js/wow.js')}}"></script>
<script src="{{asset('assets/frontend/js/script.js')}}"></script>
<script src="{{asset('assets/frontend/js/color-settings.js')}}"></script>
<script src="{{asset('assets/frontend/js/scripts.js')}}"></script>
<script src="{{asset('assets/frontend/js/goto-btn.js')}}"></script>
<script src="{{asset('assets/frontend/js/gallery.js')}}"></script>
<script src="{{asset('assets/frontend/js/window.js')}}"></script>

</body>

</html>
