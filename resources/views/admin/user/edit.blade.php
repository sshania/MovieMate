@extends('layouts/admin')

@section('title', 'Edit User')

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

    <form action="{{ route('admin.user.update', $userData->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" value={{$userData->name}} name="name" placeholder="Name" required>
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value={{$userData->email}} name="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" value={{$userData->phone_number}} name="phone_number" placeholder="Phone Number" required>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="mb-3">
            <label for="confirmpass">Confirm Password</label>
            <input type="password" class="form-control" id="confirmpass" name="confirmpass" placeholder="Confirm Password" required>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Edit</button>
        </div>
    </form>
</div>
@endsection