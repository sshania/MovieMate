@extends('layouts/admin')

@section('title', 'Edit Cinema')

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

    <div class="card p-4 shadow-lg" 
         style="background-color: #1c1c1c; color: #fff; border-radius: 10px; max-width: 600px; width: 100%; padding: 20px;">
        <h2 class="text-center" style="color: #ff4747; font-weight: bold;">Edit Cinema</h2>
        <form action="{{ route('cinema.update', $CinemaData->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label" style="font-weight: bold;">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$CinemaData->name}}" 
                       style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="location" class="form-label" style="font-weight: bold;">Location</label>
                <input type="text" class="form-control" name="location" id="location" value="{{$CinemaData->location}}" 
                       style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="total_studios" class="form-label" style="font-weight: bold;">Total Studios</label>
                <input type="text" class="form-control" name="total_studios" id="total_studios" value="{{$CinemaData->total_studios}}" 
                       style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="d-grid">
                <button class="btn btn-danger" type="submit" 
                        style="background-color: #ff4747; border: none; font-weight: bold; border-radius: 5px;">Edit</button>
            </div>
        </form>
    </div>
</div>

@endsection
