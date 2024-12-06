@extends('layouts.main')

@section('title', 'MovieMate | Payment')

@section('content')
<link rel="stylesheet" href="{{asset('css/payment.css')}}">

@php
    $cinemaId = request('cinema_id');
    $movieId = request('movie_id');
    $movieTitle = \App\Models\Movie::find($movieId)->title ?? 'Unknown Movie';
    $movieGenre = \App\Models\Movie::find($movieId)->genre ?? 'Unknown Movie';
    $moviePoster = \App\Models\Movie::find($movieId)->movie_images ?? 'Unknown Movie';

    $showtimeId = request('showtime_id');
    $cinemaLocation = \App\Models\Cinema::find($cinemaId)->location ?? 'Unknown Cinema';
    $showtimeDate = \App\Models\Showtime::find($showtimeId)->showtime_date ?? 'Unknown Date';
    $showtimeHour = \App\Models\Showtime::find($showtimeId)->showtime_hour ?? 'Unknown Hour';
@endphp

<div class="order-container-wrapper">
    <div class="order-container">
        <h1>YOUR ORDER</h1>
        <div class="order-content">
            <div class="order-details-wrapper">
                <div class="order-details">
                    <div class="movie-poster">
                        <img src="{{ asset('poster/' . $moviePoster) }}" alt="Wicked Poster">
                    </div>
                    <div class="movie-info">
                        <h2>{{$movieTitle}}</h2>
                        <p>{{$movieGenre}}</p>
                        <p>📍{{ $cinemaLocation }}</p>
                    </div>
                </div>
                <div class="order-details-2">
                    <div>
                        <p>{{$showtimeDate}}</p>
                        <p>Date</p>
                    </div>
                    <div>
                        <p>{{$showtimeHour}}</p>
                        <p>Hour</p>
                    </div>
                    <div>
                        <p> 3 </p>
                        <p>Total Seats</p>
                    </div>
                    <div>
                        <img src="" alt=">">
                    </div>
                </div>
            </div>

            <div class="payment-method">
                <div class="payment-title">
                    <h3>Payment Method</h3>
                </div>
                <div class="payment-type-container">
                    <label>
                        <img src="{{ asset('assets/payment/visa.png') }}" alt="visa"> Credit Card
                        <input type="radio" name="payment" value="credit-card">
                    </label>
                    <label>
                        <img src="{{ asset('assets/payment/paypal.png') }}" alt="paypal"> Paypal
                        <input type="radio" name="payment" value="paypal">
                    </label>
                    <label>
                        <img src="{{ asset('assets/payment/gopay.png') }}" alt="gopay"> GoPay
                        <input type="radio" name="payment" value="gopay">
                    </label>
                    <label>
                        <img src="{{ asset('assets/payment/ovo.png') }}" alt="ovo"> Ovo
                        <input type="radio" name="payment" value="ovo">
                    </label>
                    <label>
                        <img src="{{ asset('assets/payment/bca.png') }}" alt="bca"> BCA Virtual Account
                        <input type="radio" name="payment" value="bca">
                    </label>
                </div>
            </div>

            <form action="{{ route('payment.update') }}" method="POST">
                @csrf
                <input type="hidden" name="booking_id" value="{{ $booking->id }}">

                <div class="buttons">
                    <button type="submit" class="btn btn-pay">Pay</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- <div class="">
    <div>
        <div>
            <h1>Your Order</h1>
        </div>
        <div>
            <div>
                <div class="">
                    <img src="" alt="">
                </div>
                <div class="">

                </div>
            </div>
            <div>

            </div>
        </div>
        <div>
            Payment Method
        </div>
        <div>
            this is the radio part button
        </div>
        <div>
            <button>Cancel</button>
            <button>Pay</button>
        </div>
    </div>
</div> --}}

@endsection
