@extends('layouts/admin')

@section('title', 'Studio Index')

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
    <a href="{{ route('studio.create') }}" class="btn-add">+</a>
</div>

<table class="theater-table">
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
                {{-- <td>
                    <a href="{{ route('studio.detail', ['id'=>$sl->id]) }}">detail</a>
                    <a href="{{ route('studio.edit', ['id'=>$sl->id]) }}">edit</a>
                    <form action="{{ route('studio.delete', ['id'=> $sl->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button>Delete</button>
                    </form>
                </td> --}}
                <td>
                    <a href="{{ route('studio.edit', ['id'=>$sl->id]) }} class="text-white">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form action="{{ route('studio.delete', ['id'=> $sl->id])}}" method="POST" style="display:inline;">
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
