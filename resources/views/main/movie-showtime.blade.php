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
                <div>
                    <h3 class="schedule">Schedule</h3>

                    <div class="schedule-container">
                        @foreach ($showtime as $cid => $ms)
                            <p class="showtime-date">{{ $ms->first()->showtime_date }}</p>
                        @endforeach
                    </div>

                    <div class="cinema-container">
                        @foreach ($showtime as $cid => $mc)
                            <div class="inner-cinema-container">
                                <p>{{ $mc->first()->cinema->name }}</p>
                                <p>Rp 60.000</p>
                            </div>
                            <p class="cinema-location">{{ $mc->first()->cinema->location }}</p>

                            <div class="showtime-hour-container" style="display: flex;">
                                @foreach ($mc as $showtime)
                                    <div class="showtime-hour">
                                        <p>{{ $showtime->showtime_hour }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="choose-container">
                    <a class="choose-seat-button" href="/seats">
                        Choose Seat
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/showtime.js') }}"></script>
@endsection
