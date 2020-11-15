<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Post;
use App\Slider;
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
        $data['featured_posts']=Post::where('status', 'active')->where('is_featured', 1)->limit(2)->get();
        $data['sliders'] = Slider::where('status', 'active')->get();
        $data['videos'] = Video::where('status', 'active')->limit(1)->get();
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
        $data['posts']=Post::where('status', 'active')->orderBy('id', 'desc')->paginate(5);
        $data['popular_posts']=Post::where('status', 'active')->orderBy('view_count', 'desc')->limit(3)->get();
        return view('frontend.blog', $data);
    }
    public function details($id){
        $data['popular_posts']=Post::where('status', 'active')->orderBy('view_count', 'desc')->limit(3)->get();
        $post=Post::findOrFail($id);
        $post->increment('view_count');
        $data['post']=$post;
        return view('frontend.details', $data);
    }
}
