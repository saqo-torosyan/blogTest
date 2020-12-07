@extends('layouts.app')

@section('content')
<div class="container">
   <h2>{{$post->title}}</h2>
   <p>{{$post->created_at}}</p>
   <p>{{$post->description}}</p>

</div>
@endsection
