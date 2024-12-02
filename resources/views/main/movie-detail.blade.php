@extends('layouts.main')

@section('content')
<div>
    {{$movie}}
    <a href="{{ route('user.movie.showtime', ['id'=>$movie->id]) }}">Buy Ticket</a>
</div>

@endsection
