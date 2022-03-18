@extends('layouts.main')

@section('container')
    <h1>Edit Book</h1>

    <div class="col-lg-8">
        <form method="POST" action="/layouts/blog/{{ $post->slug }}">
          @method('PUT') 
          @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title"">
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug"">
              </div>

              <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author"">
              </div>

              <div class="form-group">
                <label for="body">Synopsis</label>
                <input type="hidden" class="form-control" id="body">
                <trix-editor input="body"></trix-editor>
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form> 
    </div>
@endsection