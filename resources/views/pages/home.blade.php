@extends('layouts.main')

@section('title', 'Movies')

@section('content')
    <h1>Movies</h1>
    <h3>by genre</h3>

    <ul>
        @foreach ($genres as $genre)
            <li>
                <h4>
                    {{$genre["name"]}}
                </h4>

                <ul>
                    @foreach ($genre->movies
                     as $movie)
                    <li>
                        {{$movie["name"]}}
                    </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

@endsection
