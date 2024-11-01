@extends('layout')

@section('content')
    @foreach($users as $user)
        <p>name: {{ $user['name']}}</p>
        <p>phone number: {{ $user['phone']}}</p>
        <p>email: {{ $user['email']}}</p>
        <hr>
    @endforeach
@endsection
