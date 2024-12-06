@extends('layouts/admin')

@section('title', 'Movie Detail')

@section('content')

<link rel="stylesheet" href="{{ asset('css/movierating.css') }}">

<div style="min-height: 80vh; display: flex; align-items: center; justify-content: center;">
    <div class="movie-detail-container" style="display: flex; align-items: flex-start; padding: 20px; color: white; background-color: #222; max-width: 1200px; margin: 0 auto; border-radius: 10px; width: 100%;">
        <div class="movie-poster" style="flex: 1; margin-right: 20px;">
            <img src="{{ asset('poster/' . $movieDetail->movie_images) }}" alt="Movie Poster" style="width: 100%; max-width: 300px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);">
        </div>

        <div class="movie-info" style="flex: 2;">
            <h1 style="font-size: 32px; margin-bottom: 10px;">{{ $movieDetail['title'] }}</h1>
            <p style="margin: 5px 0;"><strong>Age Rating:</strong>
                <span class="movie-rating {{ $movieDetail->rating }}">
                    {{ $movieDetail->rating }}
                </span>
            </p>
            <p style="margin: 5px 0;"><strong>Duration:</strong> {{ $movieDetail['duration'] }} minutes</p>
            <p style="margin: 5px 0;"><strong>Genre:</strong> {{ $movieDetail['genre'] }}</p>
            <p style="margin: 5px 0;"><strong>Producer:</strong> {{ $movieDetail['producer'] }}</p>
            <p style="margin: 5px 0;"><strong>Director:</strong> {{ $movieDetail['director'] }}</p>
            <p style="margin: 5px 0;"><strong>Writer:</strong> {{ $movieDetail['writer'] }}</p>
            <p style="margin: 5px 0;"><strong>Production House:</strong> {{ $movieDetail['production_house'] }}</p>
            <p style="margin: 5px 0;"><strong>Cast:</strong> {{ $movieDetail['casts'] }}</p>
            <p style="margin: 10px 0; line-height: 1.6;"><strong>Synopsis:</strong> {{ $movieDetail['description'] }}</p>

            <div style="margin-top: 20px;">
                <a href="{{ route('movie.edit', $movieDetail['id']) }}" class="btn btn-warning" style="padding: 10px 20px; margin-right: 10px; background-color: orange; color: black; border: none; border-radius: 5px; text-decoration: none;">Edit</a>
                <form action="{{ route('movie.delete', $movieDetail['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="padding: 10px 20px; background-color: red; color: white; border: none; border-radius: 5px;">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
