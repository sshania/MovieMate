@extends('layouts/admin')

@section('title', 'Edit Movie')

@section('content')

<div class="mt-5 col-8 m-auto">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('movie.update', $movieData->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{$movieData->title}}">
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select name="rating" id="rating" class="form-control">
                <option value="" disabled selected>Select a rating</option>
                @foreach(['SU', 'R 13+', 'D 17+'] as $rating)
                <option value="{{ $rating }}" {{$movieData->rating== $rating ? 'selected' : '' }}>
                    {{ $rating }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration</label>
            <input type="number" class="form-control" id="duration" name="duration" value="{{$movieData->duration}}">
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{$movieData->genre}}">
        </div>

        <div class="mb-3">
            <label for="movie_images" class="form-label">Movie Image</label>
            <input type="file" name="movie_images" id="movie_images" class="form-control" value="{{$movieData->movie_images}}" />
        </div>

        <div class="mb-3">
            <label for="producer" class="form-label">Producer</label>
            <input type="text" class="form-control" id="producer" name="producer" value="{{$movieData->producer}}">
        </div>

        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="text" class="form-control" id="director" name="director" value="{{$movieData->director}}">
        </div>

        <div class="mb-3">
            <label for="writer" class="form-label">Writer</label>
            <input type="text" class="form-control" id="writer" name="writer" value="{{$movieData->writer}}">
        </div>

        <div class="mb-3">
            <label for="production_house" class="form-label">Production House</label>
            <input type="text" class="form-control" id="production_house" name="production_house" value="{{$movieData->production_house}}">
        </div>

        <div class="mb-3">
            <label for="casts" class="form-label">Casts</label>
            <input type="text" class="form-control" id="casts" name="casts" value="{{$movieData->casts}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$movieData->description}}">
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date" value="{{$movieData->release_date}}">
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Edit</button>
        </div>
    </form>

</div>

@endsection