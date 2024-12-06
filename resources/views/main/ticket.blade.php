@extends('layouts.main')

@section('content')

<div>
    @foreach ($bookingList as $bl)
        <div>
            {{$bl->movie->title}}
        </div>
        <div>
            {{$bl->showtime->showtime_date}}
        </div>
        <div>
            {{$bl->showtime->showtime_hour}}
        </div>
        <a href="{{ route('user.booking.detail', ['id' => $bl->id]) }}">Detail</a>
    @endforeach
</div>

@endsection