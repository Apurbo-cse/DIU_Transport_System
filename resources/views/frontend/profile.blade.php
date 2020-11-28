@extends('layouts.frontend.master')
@section('title', 'User Profile')
@section('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="{{asset('assets/frontend/style/sup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/co-sup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/teams.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/most_post.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/drop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/locate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style/modal.css')}}">
    <link rel="stylesheet" href="style.css">

@endsection


@section('content')
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
                    Mizanur Rahaman Raihan
                </h2>
                <br>
                <div>
                    <p class="pro-type">ID : 171-X-14XX</p>
                    <p class="pro-type">Department of CSE</p>
                    <p class="pro-type">Email : mizahurx-14xx@diu.edu.bd</p>
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
@endsection


@section('script')
    <script src="{{asset('assets/frontend/js/modal.js')}}"></script>
    <script src="{{asset('assets/frontend/js/window.js')}}"></script>
@endsection


