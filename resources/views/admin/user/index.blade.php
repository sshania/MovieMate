@extends('layouts/admin')

@section('title', 'Studio Index')

@section('content')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<div class="admin-container">
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ route('cinema.index') }}" class="sidebar-link">Cinema</a>
        <a href="{{ route('studio.index') }}" class="sidebar-link">Studio</a>
        <a href="{{ route('movie.index') }}" class="sidebar-link">Movie</a>
        <a href="{{ route('showtime.index') }}" class="sidebar-link">Showtime</a>
        <a href="#" class="sidebar-link">Booking</a>
        <a href="{{ route('admin.user.index') }}" class="sidebar-link active">User</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <table class="theater-table">
            <thead>
                <tr>
                    <th>UserID</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userList as $ul)
                    <tr>
                        <td>{{ $ul->id }}</td>
                        <td>{{ $ul->name }}</td>
                        <td>{{ $ul->email }}</td>
                        <td>{{ $ul->phone_number }}</td>
                        <td>
                            <a href="{{ route('admin.user.edit', ['id' => $ul->id]) }}" class="text-white">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.user.delete', ['id' => $ul->id]) }}" method="POST" style="display:inline;">
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
