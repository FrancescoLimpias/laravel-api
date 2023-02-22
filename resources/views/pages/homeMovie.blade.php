@extends('layouts.main')

@section('title', 'Movies')

@section('content')
    <h1>Movies</h1>
    {{-- <h3>by genre</h3> --}}

    <ul>
        @foreach ($movies as $movie)
            <li>
                <h5>
                    {{$movie["name"]}}
                </h5>
            </li>
        @endforeach
    </ul>
@endsection
