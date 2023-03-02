<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">


        {{-- start of my css bootstrap --}}

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        {{-- end of my css bootstrap --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LAWICO</title>

        <div class="container">
            <div>
                <a href="/"><button class="btn btn-primary">BACK</button></a>
                <center><h1>All Posts from Lawico</h1></center>
            </div>
            <br><br>
            @if (count($posts)>0)
                @foreach($posts as $post)
                    <div class="well">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img style="width :100%"src="/storage/images/{{$post->cover_image}}">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <h3><a href = "/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                                <p>{{ $post->body }}</p>
                                <small>Written on {{$post->created_at}}</small>
                            </div>
                            <br><br>
                        </div>
                    </div>
                @endforeach
                {{-- <hr>
                {{$posts->links()}} --}}
            @else
                <h3>No Posts available</h3>
            @endif
        </div>


</body>
</html>

