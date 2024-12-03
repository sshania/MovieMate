@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/cinema.css') }}">
    <div class="theater-container">
        <h1>
            THEATER <span>INFO</span>
        </h1>
        <table class="theater-table">
            <thead>
                <tr>
                    <th>Theater Name</th>
                    <th>Location</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Cinemas as $cinema)
                <tr>
                    <td>{{ $cinema['name'] }}</td>
                    <td>{{ $cinema['location'] }}</td>
                    <td>{{ $cinema['contact'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
