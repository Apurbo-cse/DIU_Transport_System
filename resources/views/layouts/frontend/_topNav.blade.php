<div id="nav-container">
    <ul id="menu-header-menu" class="menu clearfix">
        <li><a href="{{route('home')}}" >Home</a></li>
        <li><a href="{{route('schedule')}}">Schedule</a></li>
        <li><a href="{{route('service')}}">Service</a></li>
        <li><a href="buyticket.html">Buy Ticket</a></li>
        <li>
            <div class="dropdown">
                <a class="dropbtn" style="color: white;">Facilities</a>
                <div class="dropdown-content">
                    <a href="{{route('maps')}}">Locate Bus</a>
                    <a href="#">Facial Recognition</a>
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown">
                <a class="dropbtn" style="color: white;">Info</a>
                <div class="dropdown-content">
                    <a href="about.html">About</a>
                    <a href="{{route('developers')}}">Developers</a>
                    <a href="{{route('transportinfo')}}">Transport Info</a>
                </div>
            </div>
        </li>
        <li><a href="{{route('gallery')}}">Gallery</a></li>
        <li><a href="{{route('blog')}}">Blog</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>
        <li>
            <div class="dropdown">
                <a class="dropbtn" style="color: white;"><i class="fa fa-user" aria-hidden="true"></i></a>
                <div class="dropdown-content">
                    <a href="{{route('profile')}}">Profile</a>
                    <a href="{{route('ticket_list')}}">Ticket List</a>
                    <a href="#">Sign Out</a>
                </div>
            </div>
        </li>
    </ul>


    <div id="header-user-info-container" class="hidden-to-guest">
          <span id="robi-header-logo">
            <a href="{{route('home')}}"> <img src="{{asset('assets/frontend/images/logo.png')}}" ></a>
          </span>
    </div>

</div>
