
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
          <h1>Edit Post</h1>

  <form action="{{ url('posts/'.$post->id) }}" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
     @method("PATCH")
         <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title',$post->title ,['class' => 'form-control', 'placeholder' => 'Title'])}}
         </div>

         <div class="form-group">
           {{ Form::label('body', 'Body')}}
            {{Form::textarea('body',$post->body ,['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
         </div>
         <div class="form-group">
            {{Form::file('cover_image')}}
         </div>
         {{Form::submit('Submit' , ['class' => 'btn btn-primary'])}}
  </form>

        </div>


</body>
</html>





