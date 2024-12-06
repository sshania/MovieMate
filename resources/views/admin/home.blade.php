@extends('layouts/admin')

@section('title', 'Admin Dashboard')

@section('content')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<!-- Admin Dashboard Title -->
<div class="admin-header">
    <h2>Admin Dashboard</h2>
</div>

<div class="admin-container">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h3>Menu</h3>
            <hr>
        </div>
        <a href="{{ route('cinema.index') }}" class="sidebar-link">
            <i class="fas fa-film"></i> Cinema
        </a>
        <a href="{{ route('studio.index') }}" class="sidebar-link">
            <i class="fas fa-video"></i> Studio
        </a>
        <a href="{{ route('movie.index') }}" class="sidebar-link">
            <i class="fas fa-ticket-alt"></i> Movie
        </a>
        <a href="{{ route('showtime.index') }}" class="sidebar-link">
            <i class="fas fa-clock"></i> Showtime
        </a>
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
