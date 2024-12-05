@extends('layouts/admin')

@section('title', 'Admin Dashboard')

@section('content')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<div class="admin-container">
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ route('cinema.index') }}" class="sidebar-link">Cinema</a>
        <a href="{{ route('studio.index') }}" class="sidebar-link">Studio</a>
        <a href="{{ route('movie.index') }}" class="sidebar-link">Movie</a>
        <a href="{{ route('showtime.index') }}" class="sidebar-link">Showtime</a>
        <a href="#" class="sidebar-link">Booking</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="welcome-message">
            <h1>Welcome to the Admin Dashboard!</h1>
            <p>Click on a menu to begin.</p>
        </div>
    </div>
</div>
@endsection
