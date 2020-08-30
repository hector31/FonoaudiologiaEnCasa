<?php

namespace App\Http\Controllers;

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
        return view('home.index');
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
