@extends('layouts.app')

@section('content')
<div class="container">
    <a href="post/create" class="btn btn-primary" role="button">+ Create new post</a>
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-primary">
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $key=>$post)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{mb_substr($post->description ,0,50) }}...</td>
                    <td>{{ $post->publication_date }}</td>
                    <td> <a href="/post/{{$post->id}}">view</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>

</div>
@endsection
