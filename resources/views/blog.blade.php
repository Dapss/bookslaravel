@extends('layouts.main')

@section('container')

<h1>Books</h1>



@foreach ($posts as $post)
    <article class="mb-5">
        
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <h5>By: {{ $post->author }}</h5>
        <p>{{ $post->excerpt }}</p>

        <a href="/layouts/blog/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit">Edit</span></a>
        <form action="/layouts/blog/{{ $post->slug }}" method="POST">
        @method('delete')
        @csrf
        <button class="badge bg-danger" onclick="return confirm('Are you sure?')"><span data-feather="delete">Delete</span></button>
        </form>
    </article>
@endforeach

<a href="/create" class="btn btn-primary mb-3">Add Book</a>
@endsection