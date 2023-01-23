@extends('layouts.app')

@section('content')
<a href="/posts"class="btn btn-default ">GO BACK</a>
    <h1>{{$post->title}}</h1>
    <img style="width :100%"src="/storage/images/{{$post->cover_image}}">
    <div>
        {{$post->body}}
    </div>
    <hr>

    <small>Written on {{$post->created_at}}</small>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <hr>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['Action' => 'PostsController@destroy', 'method'=>'POST', 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class'=> 'btn btn-danger']) }}
            {!!Form::close()!!}
        @endif
    @endif
@endsection
