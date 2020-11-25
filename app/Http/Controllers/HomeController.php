<?php

namespace App\Http\Controllers;

use App\Post;
use App\Galery;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts=Post::orderBy('created_at', 'DESC')->limit(15)->get();
        $galery_posts=Galery::orderBy('created_at', 'DESC')->paginate(6);
        
        return view('home.index',['posts'=>$posts,'galery_posts'=>$galery_posts]);
    }
    public function show_videos(){
        return view('home.blog.videos');
    }
    public function show_fono_tips(){
        return view('home.blog.fono-tips');
    }
    public function show_imprimibles(){
        return view('home.blog.imprimibles');
    }
    public function show_noticias(){
        return view('home.blog.noticias');
    }

}
