<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
</ul>

<div class="carousel-inner">

    @foreach($sliders as $slider)
    <div class="carousel-item">
        <img src="{{asset($slider->image)}}" alt="Los Angeles" style="width: 100%; height:450px">
        <div class="carousel-caption">
            <h3 style="text-shadow: 6px solid red">{{$slider->title}}</h3>
            <p>{{$slider->description}}</p>
        </div>
    </div>
    @endforeach

</div>
<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>
<script>
    document.querySelector(".carousel-inner").firstElementChild.setAttribute("class","active carousel-item");
</script>
