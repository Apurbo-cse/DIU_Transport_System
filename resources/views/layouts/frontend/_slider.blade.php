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
    @foreach($sliders as $slider)

    <div class="carousel-item">
        <img src="{{asset($slider->image)}}" alt="Los Angeles" style="width: 100%; height:450px">
        <div class="carousel-caption">
            <h3 style="text-shadow: 6px solid red">{{$slider->title}}</h3>
            <p>{{$slider->description}}</p>
        </div>
    </div>
    @endforeach
    {{--<div class="carousel-item">
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
    </div>--}}
</div>
<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>
