@extends('layout')

@section('content')
    <h1>Добавление ового поста</h1>
    <form action="{{'/posts'}}" method="post">
        @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Заголовок:</label>
        <input type="text" class="form-control" id="title" name="title" required>
        @error('title')
        <div class="danger">{{$message}}</div>
        @enderror
        </div>
        <div class="mb-3">
        <label for="content" class="form-label">Текст сообщения:</label>
        <input type="text" class="form-control" id="content" name="content" required>
        @error('content')
        <div class="danger">{{$message}}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@endsection
