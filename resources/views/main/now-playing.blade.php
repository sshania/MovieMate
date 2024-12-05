@extends('layouts/home-layout')

@section('title', 'Now Playing')

@section('content')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <div class="now-playing-container" style="margin: 5% auto">
        <div class="title-with-arrow">
            <a href="/" class="title-link">
                <span class="arrow"></span>
                <h1 class="title" id="now-playing">Now Playing</h1>
            </a>
        </div>
        <div class="movies-container">
            <div class="movies">
                @foreach ($movieNow as $mn)
                    <a href="/movies/{{ $mn->id }}" class="movie-link">
                        <div class="movie-container">
                            <div class="movie-card">
                                <div class="movie">
                                    <image src="{{ asset('poster/' . $mn->movie_images) }}" alt="{{$mn->title}}" class="movie-image"></image>
                                </div>
                            </div>
                            <div class="movie-text">
                                <h3 class="movie-title">{{$mn->title}}</h3>
                                <span class="movie-rating {{ $mn->rating }}">
                                    {{ $mn->rating }}
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            {{ $movieNow->links() }}
        </div>
    </div>
@endsection
