@extends('layout')

@section('content')
<h1>Hello posts</h1>

    @foreach($posts as $post)
            <a href="{{route('posts.show', $post)}}">{{$post->title}}</a>
            <a href="{{route('posts.edit', $post)}}">Редактировать</a>
        <hr>

    @endforeach
    {{$posts->links()}}
@endsection
