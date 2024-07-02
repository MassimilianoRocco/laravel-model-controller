@extends('layouts.app')

@section('content')
    @foreach ($movies as $movie)
        <p>{{$movie->title}}</p>
    @endforeach
@endsection
