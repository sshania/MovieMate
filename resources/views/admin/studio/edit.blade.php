@extends('layouts/admin')

@section('title', 'Edit Studio')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card p-4 shadow-lg" style="background-color: #1c1c1c; color: #fff; border-radius: 10px; max-width: 600px; width: 100%;">
        <h2 class="text-center" style="color: #ff4747; font-weight: bold;">Edit Studio</h2>
        <form action="{{ route('studio.update', $studioData->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="cinema_id" class="form-label" style="font-weight: bold;">Cinema Name</label>
                <select name="cinema_id" class="form-control" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
                    <option value="{{$studioData->cinema->id}}">{{$studioData->cinema->name}}</option>
                    @foreach ($cinemaList as $cl)
                        @unless ($cl->id == $studioData->cinema->id)
                            <option value="{{$cl->id}}">{{$cl->name}}</option>
                        @endunless
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="studio_number" class="form-label" style="font-weight: bold;">Studio Number</label>
                <input type="text" class="form-control" name="studio_number" value="{{$studioData->studio_number}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="total_seats" class="form-label" style="font-weight: bold;">Total Seats</label>
                <input type="text" class="form-control" name="total_seats" id="total_seats" value="{{$studioData->total_seats}}" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="d-grid">
                <button class="btn btn-danger" type="submit" style="background-color: #ff4747; border: none; font-weight: bold; border-radius: 5px;">Edit</button>
            </div>
        </form>
    </div>
</div>

@endsection
