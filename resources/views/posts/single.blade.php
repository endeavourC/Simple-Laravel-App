@extends('layouts.app');

@section('content')
    <a href="/posts" >Go Back</a>
    <div class="row">
            <div class="col-md-4 col-sm-4">
            <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">

            </div>
        </div>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    @if( ! Auth::guest() )
    <div class="d-flex ">

        <a href="/posts/{{$post->id}}/edit" > Edit</a>
        
        {!! Form::open( [ 'action' => [ 'PostsController@destroy', $post->id ], 'method' => 'POST' ] ) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit( 'Delete' , [ 'class' => 'btn btn-danger' ] ) }}
        {!!Form::close()!!}
    </div>
    @endif
@endsection