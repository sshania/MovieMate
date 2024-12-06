@extends('layouts/admin')

@section('title', 'Movie Index')

@section('content')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="admin-container">
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ route('cinema.index') }}" class="sidebar-link">Cinema</a>
        <a href="{{ route('studio.index') }}" class="sidebar-link">Studio</a>
        <a href="{{ route('movie.index') }}" class="sidebar-link active">Movie</a>
        <a href="{{ route('showtime.index') }}" class="sidebar-link">Showtime</a>
        <a href="#" class="sidebar-link">Booking</a>
    </div>

    <div class="main-content">
        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="button-add-container">
            <a href="{{ route('booking.create') }}" class="btn-add">+</a>
        </div>

        <table class="theater-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Movie</th>
                    <th>Cinema</th>
                    <th>Showtime</th>
                    <th>Chosen Seat</th>
                    <th>Total Price</th>
                    <th>Payment Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->user->email }}</td>
                    <td>{{ $booking->movie->name }}</td>
                    <td>{{ $booking->cinema->name }}</td>
                    <td>{{ $booking->showtime->date }} - {{ $booking->showtime->hour }}</td>
                    {{-- <td>{{ implode(', ', $booking->chosen_seat) }}</td> --}}
                    <td>{{ $booking->chosen_seat }}</td>
                    <td>{{ $booking->total_price }}</td>
                    <td>{{ $booking->payment_status ? 'Paid' : 'Pending' }}</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
