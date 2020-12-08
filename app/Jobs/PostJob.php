<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Post;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class PostJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $url="https://sq1-api-test.herokuapp.com/posts";

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $response = Http::send("GET", $this->url);

        $data = json_decode($response->body());
        $api_posts = $data->data;

        foreach( $api_posts as  $api_post){
            Post::create([
                'title'            => $api_post->title,
                'description'      => $api_post->description,
                'publication_date' => Carbon::parse($api_post->publication_date)
            ]);
        }
    }
}
