@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div class="login-container">
        <div class="login-box">
            <div class="logo">
                <img src="../assets/Logo.png" alt="Logo">
            </div>
            <h1>REGISTER</h1>

            <form action="/auth/create" method="POST">
                @csrf
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" value="{{Session::get('name')}}" name="name" placeholder="Name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" value="{{Session::get('email')}}" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" value="{{Session::get('phone_number')}}" name="phone_number" placeholder="Phone Number" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" value="{{Session::get('password')}}" name="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <label for="confirmpass">Confirm Password</label>
                    <input type="password" id="confirmpass" name="confirmpass" placeholder="Confirm Password" required>
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

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <button type="submit" class="login-button">REGISTER</button>
            </form>

        </div>
    </div>
    <script src="{{ asset('js/regist.js') }}"></script>
@endsection
