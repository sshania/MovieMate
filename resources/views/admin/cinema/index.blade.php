@extends('layouts/admin')

@section('title', 'Cinema Index')

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
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{Session::get('message')}}
            </div>
        @endif

        <div class="button-add-container">
            <a href="{{ route('cinema.create') }}" class="btn-add">+</a>
        </div>

        <table class="theater-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Total Studios</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody style="text-decoration: none;">
                @foreach ($CinemaList as $cl)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$cl->name}}</td>
                        <td>{{$cl->location}}</td>
                        <td>{{$cl->total_studios}}</td>
                        <td>{{$cl->contact}}</td>
                        <td>
                            <a href="{{ route('cinema.edit', ['id'=>$cl->id]) }}" class="text-white">
                                <i class="fa fa-edit"> </i>
                            </a>
                            <form action="{{ route('cinema.delete', ['id'=> $cl->id])}}" method="POST" style="display:inline;">
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
