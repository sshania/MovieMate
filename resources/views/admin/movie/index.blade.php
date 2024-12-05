@extends('layouts/admin')

@section('title', 'Movie Index')

@section('content')
<link rel="stylesheet" href="{{ asset('css/cinema.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@else

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
                <td>{{$loop->iteration}}</td>
                <td>{{$ml->title}}</td>
                <td>{{$ml->rating}}</td>
                <td>{{$ml->duration}}</td>
                <td>{{$ml->description}}</td>
                <td>
                    <a href="{{ route('movie.detail', ['id'=>$ml->id]) }}">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('movie.edit', ['id'=>$ml->id]) }}" class="text-white">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form action="{{ route('movie.delete', ['id'=> $ml->id])}}" method="POST" style="display:inline;">
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

@endsection
