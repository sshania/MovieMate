@extends('layouts/home-layout')

@section('title', 'MovieMate | Booking')

@section('content')
    <link rel="stylesheet" href="{{asset('css/booking.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <div class="now-showing-container">
        <h1 class="title-booking" id="now-showing"><span>Choose</span> A Movie</h1>
        <div class="movies">
            @foreach ($movieNow as $mn)
            <a href="/movies/{{ $mn->id }}">
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

@endsection
