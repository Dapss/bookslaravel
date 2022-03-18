@extends('layouts.main')

@section('container')

<h1>Book Details</h1>
<p></p>

    <article class="mb-5">
        <h3>{{ $post->title }}</h3>
        <p></p>
        <h5>By: {{ $post->author }}</h5>
        <p></p>
        <h5>Published By: {{ $post->publisher }}</h5>
        <h6>Synopsis:</h6>
        <p></p>
        {!! $post->body !!}
    </article>

    <a href="/blog">Back to Blog</a>
    
@endsection