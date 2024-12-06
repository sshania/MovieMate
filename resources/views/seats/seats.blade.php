@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{ asset('css/seats.css') }}">

@php
    $cinemaId = request('cinema_id');
    $movieId = request('movie_id');
    $showtimeId = request('showtime_id');
    $cinemaName = \App\Models\Cinema::find($cinemaId)->name ?? 'Unknown Cinema';
    $showtimeDate = request('showtime_date') ?? 'Unknown Date';
    $showtimeHour = request('showtime_hour') ?? 'Unknown Hour';
@endphp

<div class="back-button">
    <a href="">
        <img src="../assets/Back-Logo.png" alt="">
    </a>
    <p>Select Your Seat(s)</p>
</div>

<div class="title-info">
    <div class="theater-info">{{ $cinemaName }} | </div>
    <div class="date-info">{{ $showtimeDate }} {{ $showtimeHour }} </div>
</div>

<div class="outer-container">
    <div class="main-container">
        <div>
            <div class="row" name="SeatName">
                @for($i = 1; $i <= 17; $i++)
                    <div class="seat">A{{$i}}</div>
                @endfor
            </div>
            <div class="row">
                @for ($i = 1; $i <= 17; $i++)
                    <div class="seat">B{{$i}}</div>
                @endfor
            </div>
            <div class="row">
                @for ($i = 1; $i <= 17; $i++)
                    <div class="seat">C{{$i}}</div>
                @endfor
            </div>
            <div class="row">
                @for($i = 1; $i <= 17; $i++)
                    <div class="seat">D{{$i}}</div>
                @endfor
            </div>
            <div class="row">
                @for ($i = 1; $i <= 17; $i++)
                    <div class="seat">E{{$i}}</div>
                @endfor
            </div>
            <div class="row">
                @for ($i = 1; $i <= 17; $i++)
                    <div class="seat">F{{$i}}</div>
                @endfor
            </div>
            <div class="row">
                @for ($i = 1; $i <= 17; $i++)
                    <div class="seat">G{{$i}}</div>
                @endfor
            </div>
            <div class="row">
                @for ($i = 1; $i <= 17; $i++)
                    <div class="seat">H{{$i}}</div>
                @endfor
            </div>
            <div class="row">
                <div class="last-seat"></div>
                @for ($i = 1; $i <= 15; $i++)
                    <div class="seat">I{{$i}}</div>
                @endfor
                <div class="last-seat"></div>
            </div>
            <div class="screen">Screen</div>
        </div>
    </div>

    <div class="order-container">
        <form action="/payment-create" method="POST" id="seat">
            @csrf

            <input type="hidden" name="movie_id" value="{{ request('movie_id') }}">
            <input type="hidden" name="cinema_id" value="{{ request('cinema_id') }}">
            <input type="hidden" name="showtime_id" value="{{ request('showtime_id') }}">


                <div class="order-title"><span id="red">YOUR ORDER</span></div>
                <div class="order-details">
                    <p>
                        <img src="" alt="">
                        Seat(s) :
                        <span id="seat-count"></span>
                    </p>
                    <input name="seat-total" style="display:none" />
                    <p>
                        <img src="" alt="">
                        Seat No:
                    </p>
                    <input name="seat_number" style="display:none" />
                    <div class="taken"></div>
                    <p id="order-price">
                        <img src="" alt="">
                        Total Price:
                        <span id="price"></span>
                    </p>
                    <input name="sub_total" style="display:none" />
                </div>
                <div class="button-container">
                        <div class="next-button">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                </div>
        </form>
    </div>
</div>
<script src="{{ asset('js/seats.js') }}"></script>
@endsection

