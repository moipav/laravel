@extends('layout')

@section('content')
<form action="/test" method="POST">
<label for="title">input</label><br>
    <input type="text" name="title" value="{{old('title')}}"><br>
<label for="text">enter your text</label><br>
    <input type="text" name="text" value="{{old('text')}}"><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
//comment
    {{csrf_field()}}
    <button type="submit">done</button>
</form>
@endsection