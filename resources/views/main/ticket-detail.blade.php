@extends('layouts.main')

@section('content')

<div>
    <div>
        {{$booking->user->email}}
    </div>
    <div>
        {{$booking->movie->title}}
    </div>
    <div>
        {{$booking->cinema->name}}
    </div>
    <div>
        {{$booking->showtime->showtime_date}}
        {{$booking->showtime->showtime_hour}}
    </div>
    <div>
        {{$booking->chosen_seat}}
    </div>
    <div>
        {{$booking->total_price}}
    </div>
    <div>
        @if ($booking->payment_status == 1)
            <div>Done</div>
        @else
            <div>Not Done</div>
        @endif
    </div>
</div>

@endsection