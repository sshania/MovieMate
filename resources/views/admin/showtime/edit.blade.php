@extends('layouts/admin')

@section('title', 'Edit Showtime')

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
        <h2 class="text-center" style="color: #ff4747; font-weight: bold;">Edit Showtime</h2>
        <form action="{{ route('showtime.update', $showtimeData->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="movie_id" class="form-label" style="font-weight: bold;">Movie Name</label>
                <select name="movie_id" id="movie_id" class="form-control" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
                    <option value="{{$showtimeData->movie_id}}">{{$showtimeData->movie->title}}</option>
                    @foreach ($movieList as $ml)
                        <option value="{{$ml->id}}">{{$ml->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="studio_id" class="form-label" style="font-weight: bold;">Studio Name</label>
                <select name="studio_id" id="studio_id" class="form-control" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">   
                    <option value="{{$showtimeData->studio_id}}">{{$showtimeData->studio->studio_number}} {{$showtimeData->studio->cinema->name}}</option>
                    @foreach ($studioList as $sl)
                        <option value="{{$sl->id}}">{{$sl->studio_number}} {{$sl->cinema->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="showtime" class="form-label" style="font-weight: bold;">Show Time</label>
                <input type="datetime-local" class="form-control" name="showtime" value="{{$showtimeData->showtime}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="d-grid">
                <button class="btn btn-danger" type="submit" style="background-color: #ff4747; border: none; font-weight: bold; border-radius: 5px;">Edit</button>
            </div>
        </form>
    </div>
</div>

@endsection
