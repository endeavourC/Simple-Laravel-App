@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts))
        @foreach ($posts as $post)
            <div class="p-3 mt-3 mb-3 card">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                </div>
                <div class="col-md-8 col-sm-8">

                </div>
            </div>
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small class="muted">Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection