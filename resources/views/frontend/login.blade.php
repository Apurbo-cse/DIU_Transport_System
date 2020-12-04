<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="shortcut icon" href="{{asset('assets/frontend/icons/fav-icon.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/style/login.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/frontend/style/loader.css')}}">
    <title>DIU Transpot Log IN</title>
</head>

<body>

<div class="loader_bg">
    <div class="loader">

    </div>
</div>

<div class="logincontainer">
    <div class="forms-anx">
        <div class="signin-signup">
            <form action="{{url('login')}}" method="POST" class="sign-in-form">
                @csrf
                <h2 class="login-title">DIU Transport</h2>
                <div class="login-input-field">
                    <i class="fas fa-id-card"></i>
                    <input type="email" name="email" autocomplete="true" placeholder="Email" required />
                </div>
                <div class="login-input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" autocomplete="true" placeholder="Password" required />
                </div>
                <button type="submit" value="Login" class="btn">
                    Login
                    {{--<a href="" style="text-decoration: none;color: #fff;"></a>--}}
                </button>

            </form>

            <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                @csrf
                <h2 class="login-title">User Info</h2>
                <div class="login-input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" class="from-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required placeholder="Name" autocomplete="name" autofocus />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login-input-field">
                    <i class="fas fa-id-card"></i>
                    <input type="text" name="user_id" class="from-control @error('user_id') is-invalid @enderror" value="{{ old('user_id') }}" autocomplete="user_id" autofocus placeholder="171-15-XXX" required />
                    @error('user_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login-input-field">
                    <i class="fas fa-graduation-cap"></i>
                    <input type="text" name="department" class="from-control @error('department') is-invalid @enderror" value="{{ old('department') }}" autocomplete="department" autofocus placeholder="CSE" required />
                    @error('department')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login-input-field">
                    <i class="fas fa-phone"></i>
                    <input type="text" name="phone_no" class="from-control @error('phone_no') is-invalid @enderror" value="{{ old('phone_no') }}" autocomplete="phone_no" autofocus placeholder="+8801732XXXX" required />
                    @error('phone_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login-input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" class="from-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="abc15-101@diu.edu.bd" required />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login-input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" class="from-control @error('password') is-invalid @enderror" value="{{ old('password') }}" autocomplete="password" autofocus placeholder="Password" required />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button name="signup-btn" type="submit" class="btn">Sign up</button>

            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>No Id No Service</h3>
                <p>
                    Assist the driver and helper by showing the Daffodil Internatinal University ID card. Be cooperative with drivers, helpers and other passengers.
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Sign up
                </button>

            </div>

            <div class="image">
                <h2 style="color: #fff;">DIU Automated Transport System</h2>
                <p style="color: #fff;"> Transportation is a major issue to both students and parents. Most of the university students are matured enough to travel their campuses by themselves. In these cases, students use public transport from different places. DIU is always
                    concerned about their students and for this purpose now, We have around 50 + buses which are exclusively used for our students/faculty/admin personnel and staff. A parents Car and an ambulance is also available for the students
                    and their parents.</p>
            </div>
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>No Id No Service</h3>
                <p>
                    Assist the driver and helper by showing the Daffodil Internatinal University ID card. Be cooperative with drivers, helpers and other passengers.
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    Sign in
                </button> <br><br>
                <div class="image">
                    <h2 style="color: #fff;">DIU Automated Transport System</h2>
                    <p style="color: #fff;"> Transportation is a major issue to both students and parents. Most of the university students are matured enough to travel their campuses by themselves. In these cases, students use public transport from different places. DIU is
                        always concerned about their students and for this purpose now, We have around 50 + buses which are exclusively used for our students/faculty/admin personnel and staff. A parents Car and an ambulance is also available for the
                        students and their parents.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/frontend/js/login.js')}}"></script>
<script>
    setTimeout(function() {
        $('.loader_bg').fadeToggle();
    }, 5000);
</script>
</body>

</html>
