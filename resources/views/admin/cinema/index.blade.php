@extends('layouts/admin')

@section('title', 'Cinema Index')

@section('content')

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@else   
    
@endif

<a href="{{ route('cinema.create') }}">Add Cinema</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Location</th>
            <th>Total Studios</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($CinemaList as $cl)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$cl->name}}</td>
                <td>{{$cl->location}}</td>
                <td>{{$cl->total_studios}}</td>
                <td>
                    <a href="{{ route('cinema.detail', ['id'=>$cl->id]) }}">detail</a>
                    <a href="{{ route('cinema.edit', ['id'=>$cl->id]) }}">edit</a>
                    <form action="{{ route('cinema.delete', ['id'=> $cl->id])}}" method="POST">
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