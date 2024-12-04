@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <div class="container">
        <div class="content">
            <img class="image-container" src="{{ asset('../assets/bioskop.jpeg') }}" alt="pic">
            <img class="image-logo" src="{{ asset('../assets/Logo-White.png') }}" alt="MovieMate Logo">
            <p class="description">
                Moviemate is your ultimate movie companion, dedicated to making your movie-going experience as
                seamless and enjoyable as possible. Our platform offers easy access to the latest films, showtimes,
                and cinemas, allowing you to quickly book tickets with just a few clicks. Whether you’re planning a
                night out with friends, a family movie night, or looking for a special screening, Moviemate ensures
                you have all the information you need to make the best choice. With exclusive discounts, transparent
                pricing, and a user-friendly interface, we make sure you can focus on what truly matters—enjoying your
                favorite films. Join our growing community of movie lovers and experience the convenience and excitement
                that Moviemate brings to every movie night. Let us take care of your ticketing needs, so you can sit back,
                relax, and enjoy the show!</p>
        </div>
    </div>

@endsection
