@extends('layouts.frontend.master')
@section('title', 'Blog')
@section('content')
<div style="width: 100%;height:50px ; background: rgb(6, 100, 121)">
</div>
<br><br>

<div class="auto-container">
    <div class="row clearfix">

        <!--Content Side-->
        <div class="content-side col-lg-8 col-md-12 col-sm-12">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>Latest News</h2>
            </div>
            <div class="content-blocks">

                <!--News Block Four-->
                <div class="news-block-four">
                    <div class="inner-box">
                        <div class="row clearfix">
                          @foreach($posts as $post)
                            <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                <div class="image">
                                    <a href="{{route('post.details', $post->id)}}"><img src="{{$post->image}}" alt="" /></a>
                                </div>
                            </div>
                            <div class="content-box col-lg-6 col-md-6 col-sm-12">
                                <div class="content-inner">
                                    <h3><a href="{{route('post.details', $post->id)}}">{{$post->title}}</a></h3>
                                    <ul class="post-meta">
                                        <li><span class="icon fa fa-clock-o"></span>{{$post->published_at->format('M d, Y')}}</li>
                                        <li><span class="icon fa fa-comments"></span>9</li>
                                        <li><span class="icon fa fa-eye"></span>{{$post->view_count }}</li>
                                    </ul>
                                    <div class="text">{{Str::limit($post->description, 170)}}</div>
                                    <a href="{{route('post.details', $post->id)}}" class="read-more">Read More </a>
                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
                <!-- END News Block Four-->

                {{--<!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                                <span class="page-link">
                                  1
                                  <span class="sr-only">(current)</span>
                                </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!-- Pagination End -->--}}
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <nav aria-label="Page navigation" class="text-center">
                            <ul class="pagination">
                                {{$posts->render()}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <br><br>


            </div>
        </div>

        <!--Sidebar Side-->
        <!--Sidebar Side-->
        <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
            @include('layouts.frontend._sidebar')
        </div>
    </div>
</div>
</div>

@endsection
