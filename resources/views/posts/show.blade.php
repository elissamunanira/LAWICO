<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    {{-- start of my css bootstrap --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- end of my css bootstrap --}}





    <title>LAWICO</title>

        <div class="container">
            <a href="/posts"class="btn btn-default ">GO BACK</a>
    <h1>{{$post->title}}</h1>
    <img style="width :100%"src="/storage/images/{{$post->cover_image}}">
    <div>
        {{$post->body}}
    </div>
    <hr>

    <small>Written on {{$post->created_at}}</small>
    {{-- @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id) --}}
            <hr>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['Action' => 'PostsController@destroy', 'method'=>'POST', 'class' => 'pull-right']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class'=> 'btn btn-danger']) }}
            {!!Form::close()!!}
        {{-- @endif
    @endif --}}
        </div>


</body>
</html>



