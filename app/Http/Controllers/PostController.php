<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       return view('createPost');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $validate = $request->validate([
            'title'            => 'string|max:255|nullable',
            'description'      => 'string|nullable'
        ]);

        $user_id = Auth::user()->id;

        Post::create([
            'title'       => $request->title,
            'description' => $request->description,
            'user_id'     => $user_id,
            'publication_date' => now()
        ]);


        return redirect('/home');

        
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $post = Post::find($id);

        return view('post', ['post' => $post]);
    }

}
