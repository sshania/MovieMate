@extends('layouts/admin')

@section('title', 'Add New Cinema')

@section('content')
<div class="container mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card p-4 shadow-lg" style="background-color: #1c1c1c; color: #fff; border-radius: 10px; max-width: 600px; margin: auto;">
        <h2 class="text-center" style="color: #ff4747; font-weight: bold;">Create Cinema</h2>
        <form action="{{ route('cinema.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label" style="font-weight: bold;">Name</label>
                <input type="text" class="form-control" name="name" id="name" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="location" class="form-label" style="font-weight: bold;">Location</label>
                <input type="text" class="form-control" name="location" id="location" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="total_studios" class="form-label" style="font-weight: bold;">Total Studio</label>
                <input type="number" class="form-control" name="total_studios" id="total_studios" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="mb-3">
                <label for="contact" class="form-label" style="font-weight: bold;">Contact</label>
                <input type="text" class="form-control" name="contact" id="contact" style="background-color: #2c2c2c; color: #fff; border: none; border-radius: 5px;">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-danger" style="background-color: #ff4747; border: none;
                font-weight: bold; border-radius: 5px;">Add</button>
            </div>
        </form>
    </div>
</div>
@endsection
