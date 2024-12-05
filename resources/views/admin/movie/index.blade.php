@extends('layouts/admin')

@section('title', 'Movie Index')

@section('content')

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@else   
    
@endif

<a href="{{ route('movie.create') }}">Add Movie</a>
<table class="table">
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
                    <a href="{{ route('movie.detail', ['id'=>$ml->id]) }}">detail</a>
                    <a href="{{ route('movie.edit', ['id'=>$ml->id]) }}">edit</a>
                    <form action="{{ route('movie.delete', ['id'=> $ml->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection