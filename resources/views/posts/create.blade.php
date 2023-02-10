
@extends('dashboard.app')
@section('content')
    <div class="container">
        <h1>Create Post</h1>
        <form action= "{{url('posts')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

            <div class="form-group">
                <label for="title">title</label>
                <input type="title" name="title" class="form-control" placeholder="Enter the title" required><br>
            </div>
            <div class="form-group">
                <label for="body">body</label>
                <textarea type="text" name="body" class="form-control" placeholder="Enter the body" required></textarea>
            </div>

            <div class="form-group">
                <label for="cover_image">Image</label>
                <input type="file" name="cover_image" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Upload </button>
        </form>
    </div>
@endsection

