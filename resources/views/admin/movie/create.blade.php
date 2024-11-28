<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="container">
        <div>
            <h1>Create Movie</h1>
            <div class="row">
                <div class="col-sm-12">
                    <form method="POST" action="/movie/store" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                            @if($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <select name="rating" id="rating" class="form-control">
                                <option value="" disabled selected>Select a rating</option>
                                @foreach(['SU', 'R 13+', 'D 17+'] as $rating)
                                    <option value="{{ $rating }}" {{ old('rating') == $rating ? 'selected' : '' }}>
                                        {{ $rating }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('rating'))
                                <span class="text-danger">{{ $errors->first('rating') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <input type="number" class="form-control" id="duration" name="duration" value="{{ old('duration') }}">
                            @if($errors->has('duration'))
                                <span class="text-danger">{{ $errors->first('duration') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}">
                            @if($errors->has('genre'))
                                <span class="text-danger">{{ $errors->first('genre') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="producer" class="form-label">Producer</label>
                            <input type="text" class="form-control" id="producer" name="producer" value="{{ old('producer') }}">
                            @if($errors->has('producer'))
                                <span class="text-danger">{{ $errors->first('producer') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="director" class="form-label">Director</label>
                            <input type="text" class="form-control" id="director" name="director" value="{{ old('director') }}">
                            @if($errors->has('director'))
                                <span class="text-danger">{{ $errors->first('director') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="writer" class="form-label">Writer</label>
                            <input type="text" class="form-control" id="writer" name="writer" value="{{ old('writer') }}">
                            @if($errors->has('writer'))
                                <span class="text-danger">{{ $errors->first('writer') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="production_house" class="form-label">Production House</label>
                            <input type="text" class="form-control" id="production_house" name="production_house" value="{{ old('production_house') }}">
                            @if($errors->has('production_house'))
                                <span class="text-danger">{{ $errors->first('production_house') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="casts" class="form-label">Casts</label>
                            <input type="text" class="form-control" id="casts" name="casts" value="{{ old('casts') }}">
                            @if($errors->has('casts'))
                                <span class="text-danger">{{ $errors->first('casts') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                            @if($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="movie_images" class="form-label">Movie Image</label>
                            <input type="file" name="movie_images" id="movie_images" class="form-control" value="{{ old('movie_images') }}"/>
                            @if($errors->has('movie_images'))
                                <span class="text-danger">{{ $errors->first('movie_images') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
