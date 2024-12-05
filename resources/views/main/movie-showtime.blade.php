@extends('layouts/home-layout')

@section('title', 'MovieMate | Showtimes')

@section('content')
    <link rel="stylesheet" href="{{asset('css/showtimes.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <div class="movie-page">
        <div class="back-button">
            <a href="/movies/{{ $movie->id }}">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="movie-container">
            <div class="movie-poster">
                <img src="{{ asset('poster/' . $movie->movie_images) }}" alt="{{ $movie->title }} Poster">
            </div>
            <div class="movie-details">
                <h2>{{ $movie->title }}</h2>
                <p class="movie-duration">
                    <span>{{ $movie->duration }}</span> minutes
                    <span class="movie-rating {{ $movie->rating }}">
                        {{ $movie->rating }}
                    </span>
                </p>
                <h3>Schedule</h3>
                
            </div>
        </div>
    </div>
@endsection
