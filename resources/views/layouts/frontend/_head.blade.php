
<meta charset="utf-8">
<title>@yield('title') :: DIU Transport System </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
@yield('css')


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
<link rel="stylesheet" href="{{asset('assets/frontend/style/about.css')}}">



@yield('servics_css')
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

    .dropdown-content a:hover
    {
        background-color: #ddd;
        width: 100%;
    }

    .dropdown:hover .dropdown-content
    {
        display: block;
    }

</style>
