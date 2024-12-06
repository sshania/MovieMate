@extends('layouts/admin')

@section('title', 'Add New Movie')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="card p-4 shadow-lg" style="background-color: #1c1c1c; color: #fff; border-radius: 10px; max-width: 600px; width: 100%;">
        <h2 class="text-center" style="color: #ff4747; font-weight: bold;">Create Movie</h2>
        <form method="POST" action="/movie/store" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label" style="font-weight: bold;">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
                @if($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label" style="font-weight: bold;">Rating</label>
                <select name="rating" id="rating" class="form-control black-dropdown" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
                    <option value="" disabled selected>Select a rating</option>
                    @foreach(['SU', 'R 13+', 'D 17+'] as $rating)
                        <option value="{{ $rating }}" {{ old('rating') == $rating ? 'selected' : '' }}>{{ $rating }}</option>
                    @endforeach
                </select>
                @if($errors->has('rating'))
                    <span class="text-danger">{{ $errors->first('rating') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="duration" class="form-label" style="font-weight: bold;">Duration</label>
                <input type="number" class="form-control" id="duration" name="duration" value="{{ old('duration') }}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
                @if($errors->has('duration'))
                    <span class="text-danger">{{ $errors->first('duration') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label" style="font-weight: bold;">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
                @if($errors->has('genre'))
                    <span class="text-danger">{{ $errors->first('genre') }}</span>
                @endif
            </div>

            <!-- Other fields (producer, director, writer, etc.) styled similarly -->

            <div class="mb-3">
                <label for="movie_images" class="form-label" style="font-weight: bold;">Movie Image</label>
                <input type="file" name="movie_images" id="movie_images" class="form-control" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
                @if($errors->has('movie_images'))
                    <span class="text-danger">{{ $errors->first('movie_images') }}</span>
                @endif
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-danger" style="background-color: #ff4747; border: none; font-weight: bold; border-radius: 5px;">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
