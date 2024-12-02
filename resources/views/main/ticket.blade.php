@extends('layouts.main')

@section('content')

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

{{$ticket}}

@endsection