@extends('layouts/admin')

@section('title', 'Showtime Index')

@section('content')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="admin-container">
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ route('cinema.index') }}" class="sidebar-link">Cinema</a>
        <a href="{{ route('studio.index') }}" class="sidebar-link">Studio</a>
        <a href="{{ route('movie.index') }}" class="sidebar-link">Movie</a>
        <a href="{{ route('showtime.index') }}" class="sidebar-link active">Showtime</a>
        <a href="#" class="sidebar-link">Booking</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="button-add-container">
            <a href="{{ route('showtime.create') }}" class="btn-add">+</a>
        </div>

        <table class="theater-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cinema</th>
                    <th>Studio</th>
                    <th>Movie Name</th>
                    <th>Showtime</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($showtimeList as $sl)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sl->studio->cinema->name }}</td>
                        <td>{{ $sl->studio->studio_number }}</td>
                        <td>{{ $sl->movie->title }}</td>
                        <td>{{ $sl->showtime }}</td>
                        <td>
                            <a href="{{ route('showtime.edit', ['id' => $sl->id]) }}" class="text-white">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{ route('showtime.delete', ['id' => $sl->id]) }}" method="POST" style="display:inline;">
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
