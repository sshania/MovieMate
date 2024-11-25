@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <div class="container">
        <div class="content">
            <img class="image-container" src="{{ asset('../assets/bioskop.jpeg') }}" alt="pic">
            <img class="image-logo" src="{{ asset('../assets/Logo-White.png') }}" alt="MovieMate Logo">
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget lorem consequat,
                rutrum mi ut, molestie nisl. Mauris posuere arcu metus pharetra pretium. Vivamus id risus lorem.
                Maecenas id quam orci. Mauris nec eu arcu dictumismod in nec dui. Praesent vulputate tempus ipsum nullam.
                Morbi sagittis ipsum sed tristique. Donec interdum malesuada odio nec vulputate vehicula. Nulla pharetra
                iaculis felis. Quisque quam. In augue nisi. Pellentesque euismod egestas nisi non malesuada.</p>
        </div>
    </div>

@endsection
