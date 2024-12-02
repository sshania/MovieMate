@extends('layouts.main')

@section('content')
<div>
    {{$groupedByCinema}}
    <div>
        {{$movie}}
    </div>
    @foreach ($groupedByCinema as $cinemaName => $showtimes)
        <h4>{{ $cinemaName }}</h4>
        @foreach ($showtimes as $showtime)
            <a href="{{ route('user.studio.seat', ['id'=>$showtime->id]) }}">
                <p>
                    {{ \Carbon\Carbon::parse($showtime->showtime)->format('d M Y, h:i A') }} 
                    - Studio: {{ $showtime->studio->studio_number }}
                </p>
            </a>
        @endforeach
    @endforeach
</div>

@endsection
