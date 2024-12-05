@extends('layouts/admin')

@section('title', 'Add New Studio')

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

    <form action="{{ route('studio.update', $studioData->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="cinema_id">Name</label>
            <select name="cinema_id" class="form-control">
                <option value="{{$studioData->cinema->id}}">{{$studioData->cinema->name}}</option>
                @foreach ($cinemaList as $cl)
                    @unless ($cl->id == $studioData->cinema->id)
                        <option value="{{$cl->id}}">{{$cl->name}}</option>
                    @endunless
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="studio_number">Studio Number</label>
            <input type="text" class="form-control" name="studio_number" value="{{$studioData->studio_number}}">
        </div>

        <div class="mb-3">
            <label for="total_seats">Total Seats</label>
            <input type="text" class="form-control" name="total_seats" id="total_seats" value="{{$studioData->total_seats}}">
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Edit</button>
        </div>
    </form>

</div>

@endsection
