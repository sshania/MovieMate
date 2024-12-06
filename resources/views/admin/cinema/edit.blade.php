@extends('layouts/admin')

@section('title', 'Edit Cinema')

@section('content')

<div class="mt-5 col-8 m-auto">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cinema.update', $CinemaData->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$CinemaData->name}}">
        </div>

        <div class="mb-3">
            <label for="lokasi">Lokasi</label>
            <input type="text" class="form-control" name="location" id="lokasi" value="{{$CinemaData->location}}">
        </div>

        <div class="mb-3">
            <label for="total_studios">Total Studio</label>
            <input type="text" class="form-control" name="total_studios" id="total_studios" value="{{$CinemaData->total_studios}}">
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Edit</button>
        </div>

    </form>

</div>

@endsection
