@extends('layouts/home-layout')

@section('title', 'Upcoming')

@section('content')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <div class="upcoming-container" style="margin: 5% auto">
        <div class="title-with-arrow">
            <a href="/" class="title-link">
                <span class="arrow"></span>
                <h1 class="title" id="upcoming">Upcoming</h1>
            </a>
        </div>
        <div class="movies-container">
            <div class="movies">
                @foreach ($movieUp as $mu)
                    <a href="/movies/{{ $mu->id }}" class="movie-link">
                        <div class="movie-container">
                            <div class="movie-card">
                                <div class="movie">
                                    <image src="{{ asset('poster/' . $mu->movie_images) }}" alt="{{$mu->title}}" class="movie-image"></image>
                                </div>
                            </div>
                            <div class="movie-text">
                                <h3 class="movie-title">{{$mu->title}}</h3>
                                <span class="movie-rating {{ $mu->rating }}">
                                    {{ $mu->rating }}
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            {{ $movieUp->links() }}
        </div>
    </div>
@endsection
