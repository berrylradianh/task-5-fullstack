@extends('layouts.main')

@section('container')
    <h1>{{ $title}}</h1>
    @foreach ($categories as $category )
        <ul>
            <li><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></li>
        </ul>
    @endforeach
@endsection
