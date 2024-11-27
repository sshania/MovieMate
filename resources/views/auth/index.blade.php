@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <img src="../assets/Logo.png" alt="Logo">
            </div>
            <h1>LOGIN</h1>

            <form action="/auth/login" method="POST">
                @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" value= "{{Session::get('email')}}" name="email" placeholder="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="password" required>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="login-button">LOGIN</button>
            </form>

        </div>
    </div>
@endsection
