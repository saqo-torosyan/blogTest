<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "posts";
    protected $fillable = ['title','description','user_id','publication_date'];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
