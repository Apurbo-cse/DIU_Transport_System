<!DOCTYPE html>
<html>

<head>
    <title>Registration :: DIU_Transport_System</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/style/loginregistration.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/frontend/icons/fav-icon.png')}}" />

</head>

<body>
<img class="wave" src="{{asset('assets/frontend/images/wave.png')}}">
<div class="container">
    <div class="img">
        <img src="{{asset('assets/frontend/images/as.png')}}" style="width: 290px;">
    </div>
    <div class="login-content">
        <form method="POST" action="{{ route('register') }}">
            @csrf

{{--
            <img src="{{asset('assets/frontend/images/logo.png')}}">
--}}
            <h2 class="title">DIU Transport</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Username</h5>
                    <input type="text" name="name" class="input from-control @error('name') is-invalid @enderror" value="{{ old('name') }}"  autocomplete="name" autofocus />
                </div>
            </div>
            @error('name')
            <div style="color: red;">{{ $message }}</div>
            @enderror
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>ID No</h5>
                    <input type="text" name="user_id" class="input from-control @error('user_id') is-invalid @enderror" value="{{ old('user_id') }}" autocomplete="user_id" autofocus  />
                </div>
            </div>
            @error('user_id')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Department</h5>
                    <input type="text" name="department" class="input from-control @error('department') is-invalid @enderror" value="{{ old('department') }}" autocomplete="department" autofocus />
                </div>
            </div>
            @error('department')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>

                <div class="div">
                    <h5>Email</h5>
                    <input type="email" name="email" class="input from-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus />
                </div>
            </div>
            @error('email')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>01714-90XXX</h5>
                    <input type="text" name="phone_no" class="input from-control @error('phone_no') is-invalid @enderror" value="{{ old('phone_no') }}" autocomplete="phone_no" autofocus />
                </div>
            </div>
            @error('phone_no')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" name="password" class="input from-control @error('password') is-invalid @enderror" value="{{ old('password') }}" autocomplete="password" autofocus  />
                </div>
            </div>
            @error('password')
            <div style="color: red;">{{ $message }}</div>
            @enderror

            <input type="submit" class="btn" value="SIGNUP">
        </form>
    </div>
</div>
<script type="text/javascript" src="{{asset('assets/frontend/js/loginregistration.js')}}"></script>

</body>

</html>
