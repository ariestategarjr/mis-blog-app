@extends('layouts/main')

@section('container')
    
    <article class="mb-5 mt-5">
        <h2>{{ $post["title"] }}</h2>
        <p>by {{ $post["author"] }}</p>
        <p>{{ $post["content"] }}</p>
    </article>

    <a href="/blog">Back to blog</a>

@endsection