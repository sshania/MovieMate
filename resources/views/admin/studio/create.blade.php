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

    <form action="{{ route('studio.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cinema_id">Cinema Name</label>
            <select name="cinema_id" id="class" class="form-control">
                <option value="">Select One</option>
                @foreach ($cinemaList as $cl)
                    <option value="{{$cl->id}}">{{$cl->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="studio_number">Studio Number</label>
            <input type="text" class="form-control" name="studio_number">
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Add</button>
        </div>

    </form>

</div>

@endsection