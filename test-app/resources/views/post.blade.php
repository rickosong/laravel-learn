@extends('layouts.main')

@section('container')
    @foreach($posts as $post)
        <h1>{{ $post['title'] }}</h1>
        <h3>by : {{ $post['author'] }}</h3>
        <p>{{ $post['isi'] }}</p>
    @endforeach

@endsection