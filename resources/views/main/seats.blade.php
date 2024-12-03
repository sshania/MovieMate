@extends('layouts.main')

@section('content')
<h1>Available Seats for Showtime</h1>

<h2>{{ $studio->name }}</h2>

<h3>Available Seats</h3>
<ul>
    @foreach ($availableSeats as $seat)
        <form action="{{ route('user.ticket.store') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="showtime_id" value="{{ $showtime->id }}">
            <input type="hidden" name="seat_id" value="{{ $seat->id }}">

            <button type="submit">Select Seat: {{ $seat->seat_number }} (ID: {{ $seat->id }})</button>
        </form>
    @endforeach
</ul>

@endsection
