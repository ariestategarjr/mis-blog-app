@extends('layouts/main')

@section('container')
    <h1>Blog</h1>

    @foreach ($posts as $post)
    <article class="mb-5 mt-5">
        <a href="/posts/{{ $post['slug'] }}"><h4>{{ $post["title"] }}</h4></a>
        <p>by {{ $post["author"] }}</p>
        <p>{{ $post["content"] }}</p>
    </article>
    @endforeach
@endsection

