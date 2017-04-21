<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use Thujohn\Twitter\Facades\Twitter;

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

        $two_posts = [];
        $three_posts = [];
        $merged_posts = [];
        // get last 5 posts
        if (! empty($feature)) {
            $two_posts = Post::where('id', '!=', $feature->id)->where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->take(2)->get();

            $three_posts = Post::where('id', '!=', $feature->id)->where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->take(3)->offset(2)->get();

            $merged_posts = $two_posts->merge($three_posts);
        }

        return view('welcome', [
            'feature' => $feature,
            'two_posts' => $two_posts,
            'three_posts' => $three_posts,
            'merged_posts' => $merged_posts,
        ]);
    }

    public function tweet()
    {
        //$tweets = Twitter::getUserTimeline(['screen_name' => 'aziz_la7', 'count' => 20, 'format' => 'json']);
        $tweets = Twitter::getSearch(['q'  => 'laravel', 'count' => 20]);
        dd($tweets->statuses[0]);
    }
}
