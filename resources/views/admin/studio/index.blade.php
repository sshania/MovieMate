@extends('layouts/admin')

@section('title', 'Studio Index')

@section('content')

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@else   
    
@endif

<a href="{{ route('studio.create') }}">Add Studio</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Studio Number</th>
            <th>Cinema name</th>
            <th>Total seats</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($studioList as $sl)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$sl->studio_number}}</td>
                <td>{{$sl->cinema->name}}</td>
                <td>{{$sl->total_seats}}</td>
                <td>
                    <a href="{{ route('studio.detail', ['id'=>$sl->id]) }}">detail</a>
                    <a href="{{ route('studio.edit', ['id'=>$sl->id]) }}">edit</a>
                    <form action="{{ route('studio.delete', ['id'=> $sl->id])}}" method="POST">
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