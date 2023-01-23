@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href = "/posts">{{ $posts->title }}</a></h3>
                        <p>{{ $post->body }}</p>
                        <small>Written on {{$posts->created_at}} </small>
                    </div>
                </div>
            </div>
@endsection
