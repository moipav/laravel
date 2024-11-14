@extends('layout')

@section('content')
<h1>Hello posts</h1>

    @foreach($posts as $post)
        <li>
            <a href="{{route('posts.show', $post)}}">{{$post->title}}</a>
            <a href="{{route('posts.edit', $post)}}">Редактировать</a>
        </li>
    @endforeach
@endsection
