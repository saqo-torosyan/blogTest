<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public $url="https://sq1-api-test.herokuapp.com/posts";

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $publication_date = 'desc')
    {
        $posts = Post::orderBY('publication_date', $publication_date)->paginate(6);
        $response = Http::send("GET", $this->url);


        $data = json_decode($response->body());
        $api_posts = $data->data;

        return view('main',['posts' => $posts,'api_posts' => $api_posts, 'publication_date' => $publication_date]);
    }
    
}
