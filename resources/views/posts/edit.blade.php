@extends('dashboard.app')
@section('content')
        <div class="container">
          <h1>Edit Post</h1>

  <form action="{{ url('posts/'.$post->id) }}" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
     @method("PATCH")
         <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{$post->title}}" class="form-control">
         </div>

         <div class="form-group">
            <label for="body">Body</label>
            <input type="textarea" name="body" value="{{$post->body}}" class="form-control"></textarea>
          </div>
         <div class="form-group">
            <label for="file">Image</label>
            <input type="file"name="cover_image"value="{{$post->cover_image}}">
         </div>
         <input type="submit" name="submit" value="submit" class ="btn btn-primary">
  </form>

        </div>

@endsection




