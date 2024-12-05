@extends('layouts/admin')

@section('title', 'Showtime Index')

@section('content')

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@else   
    
@endif

<a href="{{ route('showtime.create') }}">Add showtime</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Cinema</th>
            <th>Studio</th>
            <th>Movie name</th>
            <th>Showtime</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($showtimeList as $sl)
            {{$sl}}
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$sl->studio->cinema->name}}</td>
                <td>{{$sl->studio->studio_number}}</td>
                <td>{{$sl->movie->title}}</td>
                <td>{{$sl->showtime}}</td>
                <td>
                    <a href="{{ route('showtime.detail', ['id'=>$sl->id]) }}">detail</a>
                    <a href="{{ route('showtime.edit', ['id'=>$sl->id]) }}">edit</a>
                    <form action="{{ route('showtime.delete', ['id'=> $sl->id])}}" method="POST">
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