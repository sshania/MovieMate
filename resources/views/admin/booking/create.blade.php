@extends('layouts/admin')

@section('title', 'Add New Booking')

@section('content')

@if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

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

        <h1>Create Booking</h1>
        <form method="POST" action="/bookings/store" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">User</label>
                <select name="user_id" id="user_id" class="form-control black-dropdown">
                    <option value="" disabled selected>Select a User</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                            {{ $user->email }}
                        </option>
                    @endforeach
                </select>
                @if($errors->has('user_id'))
                    <span class="text-danger">{{ $errors->first('user_id') }}</span>
                @endif
            </div>

            <!-- Movie -->
            <div class="mb-3">
                <label for="movie_id" class="form-label">Movie</label>
                <select name="movie_id" id="movie_id" class="form-control black-dropdown">
                    <option value="" disabled selected>Select a Movie</option>
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}" {{ old('movie_id') == $movie->id ? 'selected' : '' }}>
                            {{ $movie->name }}
                        </option>
                    @endforeach
                </select>
                @if($errors->has('movie_id'))
                    <span class="text-danger">{{ $errors->first('movie_id') }}</span>
                @endif
            </div>

            <!-- Cinema -->
            <div class="mb-3">
                <label for="cinema_id" class="form-label">Cinema</label>
                <select name="cinema_id" id="cinema_id" class="form-control black-dropdown">
                    <option value="" disabled selected>Select a Cinema</option>
                    @foreach($cinemas as $cinema)
                        <option value="{{ $cinema->id }}" {{ old('cinema_id') == $cinema->id ? 'selected' : '' }}>
                            {{ $cinema->name }}
                        </option>
                    @endforeach
                </select>
                @if($errors->has('cinema_id'))
                    <span class="text-danger">{{ $errors->first('cinema_id') }}</span>
                @endif
            </div>

            <!-- Showtime -->
            <div class="mb-3">
                <label for="showtime_id" class="form-label">Showtime</label>
                <select name="showtime_id" id="showtime_id" class="form-control black-dropdown">
                    <option value="" disabled selected>Select a Showtime</option>
                    @foreach($showtimes as $showtime)
                        <option value="{{ $showtime->id }}" {{ old('showtime_id') == $showtime->id ? 'selected' : '' }}>
                            {{ $showtime->showtime_date }} - {{ $showtime->showtime_hour }}
                        </option>
                    @endforeach
                </select>
                @if($errors->has('showtime_id'))
                    <span class="text-danger">{{ $errors->first('showtime_id') }}</span>
                @endif
            </div>

            <!-- Chosen Seat -->
            <div class="mb-3">
                <label for="chosen_seat" class="form-label">Chosen Seat</label>
                <input type="text" name="chosen_seat" id="chosen_seat" class="form-control" placeholder="Enter seat numbers (e.g., A1, A2)" value="{{ old('chosen_seat') }}">
                @if($errors->has('chosen_seat'))
                    <span class="text-danger">{{ $errors->first('chosen_seat') }}</span>
                @endif
            </div>

            <!-- Total Price -->
            <div class="mb-3">
                <label for="total_price" class="form-label">Total Price</label>
                <input type="number" name="total_price" id="total_price" class="form-control" placeholder="Enter total price" value="{{ old('total_price') }}">
                @if($errors->has('total_price'))
                    <span class="text-danger">{{ $errors->first('total_price') }}</span>
                @endif
            </div>

            <!-- Payment Status -->
            <input type="hidden" name="payment_status" value="0">

            <!-- Submit Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>

    <style>
        .black-dropdown, .black-dropdown option {
            color: black !important;
            /* background-color: rgb(58, 58, 58); */
        }
    </style>

@endsection
