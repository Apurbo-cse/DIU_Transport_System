<?php

namespace App\Http\Controllers;

use App\Bus_Category;
use App\Gallery;
use App\Post;
use App\Service;
use App\Slider;
use App\Tag;
use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['featured_posts']=Post::where('status', 'active')->where('is_featured', 1)->limit(2)->paginate(2);
        $data['popular_posts']=Post::where('status', 'active')->orderBy('view_count', 'desc')->limit(3)->get();
        $data['latest_news']=Post::where('status', 'active')->orderBy('id', 'desc')->limit(3)->get();
        $data['sliders'] = Slider::where('status', 'active')->get();
        $data['videos'] = Video::where('status', 'active')->limit(1)->get();
        $data['tags']=Tag::all();
        return view('frontend.home', $data);
    }

    public function schedule(){
        return view('frontend.schedule');
    }

    public function gallery(){
        $data['galleries'] = Gallery::where('status', 'active')->get();
        return view('frontend.gallery', $data);
    }
    public function contact(){
        $data['sliders'] = Slider::where('status', 'active')->get();
        return view('frontend.contact', $data);
    }
    public function blog(){
        $data['latest_news']=Post::where('status', 'active')->orderBy('id', 'desc')->limit(3)->get();
        $data['posts']=Post::where('status', 'active')->orderBy('id', 'desc')->paginate(5);
        $data['popular_posts']=Post::where('status', 'active')->orderBy('view_count', 'desc')->limit(3)->get();
        return view('frontend.blog', $data);
    }
    public function details($id){
        $data['latest_news']=Post::where('status', 'active')->orderBy('id', 'desc')->limit(3)->get();
        $data['popular_posts']=Post::where('status', 'active')->orderBy('view_count', 'desc')->limit(3)->get();
        $post=Post::findOrFail($id);
        $post->increment('view_count');
        $data['post']=$post;
        return view('frontend.details', $data);
    }
    public function service(){
        $data['sliders'] = Slider::where('status', 'active')->get();
        $data['services'] = Service::where('status', 'active')->get();
        return view('frontend.service', $data);
    }

    public function transportinfo(){

        return view('frontend.transportinfo');

    }
    public function locate(){

        return view('frontend.maps');

    }
    public function cityroute(){

        return view('frontend.cityroute');

    }
}
