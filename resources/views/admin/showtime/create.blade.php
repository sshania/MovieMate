@extends('layouts/admin')

@section('title', 'Add New Cinema')

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

    <form action="{{ route('showtime.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="movie_id">Movie Name</label>
            <select name="movie_id" id="class" class="form-control">
                <option value="">Select One</option>
                @foreach ($movieList as $ml)
                    <option value="{{$ml->id}}">{{$ml->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="studio_id">Studio Name</label>
            <select name="studio_id" id="class" class="form-control">   
                <option value="">Select One</option>
                @foreach ($studioList as $sl)
                    <option value="{{$sl->id}}">{{$sl->studio_number}} {{$sl->cinema->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="showtime">Show Time</label>
            <input type="datetime-local" class="form-control" name="showtime">
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Add</button>
        </div>

    </form>

</div>

@endsection