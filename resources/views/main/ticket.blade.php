@extends('layouts.main')

@section('content')


<link rel="stylesheet" href="{{ asset('css/cinema.css') }}">
    <div class="theater-container">
        <h1>
            YOUR <span>TICKET</span>
        </h1>
        <table class="theater-table">
            <thead>
                <tr>
                    <th>Movie Name</th>
                    <th>Schedule</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookingList as $bl)
                <tr>
                    <td>
                        <a href="{{ route('user.booking.detail', ['id' => $bl->id]) }}">
                            {{$bl->movie->title}}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('user.booking.detail', ['id' => $bl->id]) }}">
                            {{$bl->showtime->showtime_date}} | {{$bl->showtime->showtime_hour}}
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
