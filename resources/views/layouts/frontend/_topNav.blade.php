<div id="nav-container">
    <ul id="menu-header-menu" class="menu clearfix">
        <li><a href="{{route('home')}}" >Home</a></li>
        <li><a href="{{route('schedule')}}">Schedule</a></li>
        <li><a href="{{route('service')}}">Service</a></li>
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
        <li><a href="{{route('gallery')}}">Gallery</a></li>
        <li><a href="{{route('blog')}}">Blog</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>
        <li><a href="user.html">Account</a></li>
    </ul>


    <div id="header-user-info-container" class="hidden-to-guest">
          <span id="robi-header-logo">
            <a href="{{route('home')}}"> <img src="{{asset('assets/frontend/images/logo.png')}}" ></a>
          </span>
    </div>

</div>
