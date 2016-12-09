<?php

namespace App\Http\Controllers;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get last featured post
        $feature = Post::where('status', 'PUBLISHED')->where('featured', 1)->orderBy('created_at', 'desc')->first();
        // get last 5 posts
        $posts = Post::where('id', '!=' , $feature->id)->where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->take(5)->get();
        dd($posts);
        return view('welcome', ['feature' => $feature]);
    }
}
