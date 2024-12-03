@extends('layouts/home-layout')

@section('title', 'MovieMate | MovieDetail')

@section('content')
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">


    <div class="movie-page">
        <div class="back-button">
            <a href="/">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="movie-container">
            <div class="movie-poster">
                <img src="{{ asset('poster/' . $movie->movie_images) }}" alt="{{ $movie->title }} Poster">
            </div>
            <div class="movie-details">
                <h2>{{ $movie->title }}</h2>
                <p class="movie-duration"> <span>{{ $movie->duration }}</span> minutes
                    <span class="movie-rating {{ $movie->rating }}">
                        {{ $movie->rating }}
                    </span>
                </p>
                <p><b>Genre Film:</b> {{ $movie->genre }}</p>
                <p><b>Producer:</b> {{ $movie->producer }}</p>
                <p><b>Director:</b> {{ $movie->director }}</p>
                <p><b>Writer:</b> {{ $movie->writer }}</p>
                <p><b>Production House:</b> {{ $movie->production_house }}</p>
                <p><b>Casts:</b> {{ $movie->casts }}</p>
                <div class="synopsis">
                    <h4>Sinopsis</h4>
                    <p>{{ $movie->description }}</p>
                </div>
                <div class="buy-ticket">
                    <button class="btn btn-primary">Buy Ticket</button>
                </div>
            </div>
        </div>
    </div>
@endsection
