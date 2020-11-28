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
    <title>Login :: DIU_Transport_System</title>
</head>

<body>

<div class="loader_bg">
    <div class="loader">

    </div>
</div>

<div class="logincontainer">
    <div class="forms-anx">
        <div class="signin-signup">
            <form action="login.php" method="POST" class="sign-in-form">
                <h2 class="login-title">DIU Transport</h2>
                <div class="login-input-field">
                    <i class="fas fa-id-card"></i>
                    <input type="id" name="user-id" placeholder="User ID" required />
                </div>
                <div class="login-input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="user-pass" placeholder="Password" required />
                </div>
                <button name="login-btn" value="Login" class="btn">
                    <a href="{{route('home')}}" style="text-decoration: none;color: #fff;">Login</a></button>

            </form>

            <form action="signup.php" method="POST" class="sign-up-form">
                <h2 class="login-title">User Info</h2>
                <div class="login-input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user-name" class="from-control" placeholder="Username" required />
                </div>
                <div class="login-input-field">
                    <i class="fas fa-id-card"></i>
                    <input type="id" name="user-id" class="from-control" placeholder="171-15-XXX" required />
                </div>
                <div class="login-input-field">
                    <i class="fas fa-graduation-cap"></i>
                    <input type="department" name="user-dept" class="from-control" placeholder="CSE" required />
                </div>
                <div class="login-input-field">
                    <i class="fas fa-phone"></i>
                    <input type="phone" name="user-phonel" class="from-control" placeholder="+8801732XXXX" required />
                </div>
                <div class="login-input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="user-email" class="from-control" placeholder="abc15-101@diu.edu.bd" required />
                </div>
                <div class="login-input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="user-pass" class="from-control" placeholder="Password" required />
                </div>
                <button name="signup-btn" class="btn">signup</button>

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
