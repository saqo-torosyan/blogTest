<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Http;


class MainController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $publication_date = 'desc')
    {
        $posts = Post::whereNotNull('user_id')->orderBY('publication_date', $publication_date)->paginate(6);

        $api_posts = Post::whereNull('user_id')->orderBY('publication_date', $publication_date)->get();
      
        return view('main',['posts' => $posts,'api_posts' => $api_posts, 'publication_date' => $publication_date]);
    }
    
}
