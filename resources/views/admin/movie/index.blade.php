@extends('layouts/admin')

@section('title', 'Movie Index')

@section('content')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<!-- Admin Dashboard Title -->
<div class="admin-header">
    <h2>Movie Index</h2>
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
        <a href="{{ route('movie.index') }}" class="sidebar-link active">
            <i class="fas fa-ticket-alt"></i> Movie
        </a>
        <a href="{{ route('showtime.index') }}" class="sidebar-link">
            <i class="fas fa-clock"></i> Showtime
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="button-add-container">
            <a href="{{ route('movie.create') }}" class="btn-add">+</a>
        </div>

        <table class="theater-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Rating</th>
                    <th>Duration</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movieList as $ml)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ml->title }}</td>
                        <td>{{ $ml->rating }}</td>
                        <td>{{ $ml->duration }}</td>
                        <td>{{ $ml->description }}</td>
                        <td>
                            <a href="{{ route('movie.detail', ['id' => $ml->id]) }}">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('movie.edit', ['id' => $ml->id]) }}" class="text-white">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{ route('movie.delete', ['id' => $ml->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-white" style="background:none; border:none; cursor:pointer;">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
