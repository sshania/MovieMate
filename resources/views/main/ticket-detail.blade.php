@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{asset('css/history.css')}}">
<div class="ticket-container">
    <div class="ticket-card">
        <img src="" alt="">
        <div class="logo">
            <img src="../assets/Logo.png" alt="Logo">
        </div>
        <h2 class="ticket-title">YOUR TICKET</h2>
        <ul class="ticket-info">
            <li><strong>Email:</strong> {{ $booking->user->email }}</li>
            <li><strong>Movie:</strong> {{ $booking->movie->title }}</li>
            <li><strong>Location:</strong> {{ $booking->cinema->name }}</li>
            <li><strong>Schedule:</strong> {{ $booking->showtime->showtime_date }} - {{ $booking->showtime->showtime_hour }}</li>
            <li><strong>Your Seat:</strong> {{ $booking->chosen_seat }}</li>
            <li><strong>Total:</strong> {{ $booking->total_price }}</li>
            <li><strong>Payment Status:
            </strong>
            @if ($booking->payment_status == 1)
                    Done
                @else
                    Not Done
                @endif
            </li>
        </ul>
        <a href="/" class="back-button">Back</a>
    </div>
</div>
@endsection
