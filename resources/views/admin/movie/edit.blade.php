@extends('layouts/admin')

@section('title', 'Edit Movie')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card p-4 shadow-lg" style="background-color: #1c1c1c; color: #fff; border-radius: 10px; max-width: 600px; width: 100%;">
        <h2 class="text-center" style="color: #ff4747; font-weight: bold;">Edit Movie</h2>
        <form action="{{ route('movie.update', $movieData->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label" style="font-weight: bold;">Title</label>
                <input type="text" class="form-control" name="title" value="{{$movieData->title}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label" style="font-weight: bold;">Rating</label>
                <select name="rating" id="rating" class="form-control" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
                    <option value="" disabled selected>Select a rating</option>
                    @foreach(['SU', 'R 13+', 'D 17+'] as $rating)
                    <option value="{{ $rating }}" {{$movieData->rating== $rating ? 'selected' : '' }}>
                        {{ $rating }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="duration" class="form-label" style="font-weight: bold;">Duration</label>
                <input type="number" class="form-control" id="duration" name="duration" value="{{$movieData->duration}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label" style="font-weight: bold;">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{$movieData->genre}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="movie_images" class="form-label" style="font-weight: bold;">Movie Image</label>
                <input type="file" name="movie_images" id="movie_images" class="form-control" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;" />
            </div>

            <div class="mb-3">
                <label for="producer" class="form-label" style="font-weight: bold;">Producer</label>
                <input type="text" class="form-control" id="producer" name="producer" value="{{$movieData->producer}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="director" class="form-label" style="font-weight: bold;">Director</label>
                <input type="text" class="form-control" id="director" name="director" value="{{$movieData->director}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="writer" class="form-label" style="font-weight: bold;">Writer</label>
                <input type="text" class="form-control" id="writer" name="writer" value="{{$movieData->writer}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="production_house" class="form-label" style="font-weight: bold;">Production House</label>
                <input type="text" class="form-control" id="production_house" name="production_house" value="{{$movieData->production_house}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="casts" class="form-label" style="font-weight: bold;">Casts</label>
                <input type="text" class="form-control" id="casts" name="casts" value="{{$movieData->casts}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label" style="font-weight: bold;">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$movieData->description}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="release_date" class="form-label" style="font-weight: bold;">Release Date</label>
                <input type="date" class="form-control" id="release_date" name="release_date" value="{{$movieData->release_date}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="d-grid">
                <button class="btn btn-danger" type="submit" style="background-color: #ff4747; border: none; font-weight: bold; border-radius: 5px;">Edit</button>
            </div>
        </form>
    </div>
</div>

@endsection
