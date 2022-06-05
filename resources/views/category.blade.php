@extends('layouts.main')

@section('container')
    <h1>Post Category : {{ $category }}</h1>
    @foreach ($posts as $post )
        <article class="mb-5 border-bottom pb-3">
            <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
            <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a class="text-decoration-none" href="/post/{{ $post->slug }}"> Read More</a>
        </article>
    @endforeach
@endsection
